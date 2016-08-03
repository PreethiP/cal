<?php
/**
* @version   $Id: error.php 2970 2012-08-31 22:45:34Z kevin $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*
* Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
*
*/
defined( '_JEXEC' ) or die( 'Restricted access' );
if (!isset($this->error)) {
	$this->error = JError::raiseWarning( 403, JText::_('ALERTNOTAUTH') );
	$this->debug = false;
}

// load and inititialize gantry class
require_once('lib/gantry/gantry.php');
$gantry->init();

$doc = JFactory::getDocument();
$doc->setTitle($this->error->getCode() . ' - '.$this->title);

$gantry->addStyle('grid-responsive.css', 5);
$gantry->addLess('global.less', 'master.css', 8, array('headerstyle'=> '"header-' . $gantry->get('headerstyle', 'dark') . '.less"'));
$gantry->addStyle('jf-error.css');
if ($gantry->browser->name == 'ie') {
	if ($gantry->browser->shortversion == 8) {
		$gantry->addScript('html5shim.js');
	}
}
$gantry->addScript('rokmediaqueries.js');

ob_start();
?>
<body <?php echo $gantry->displayBodyTag(); ?>>
	<div class="rt-container">
		<div class="component-content">
			<div class="rt-grid-12">
				<div class="rt-block">
					<div class="rt-error-content">
						<h1 class="error-title title"><?php echo $this->error->getCode(); ?></h1>
						<div class="error-content">
						<p class="jf-page-not-found">THE PAGE CANNOT BE FOUND.</p>
						<p><a href="<?php echo $gantry->baseUrl; ?>" class="readon">&larr; Home</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- START Mouse Loader -->
		<canvas id="jf_circleX" width="100" height="100"></canvas>
		<div id="jf_circlecolor"></div>
	<!-- END Mouse Loader -->
</body>
</html>
<?php

$body = ob_get_clean();
$gantry->finalize();

require_once(JPATH_LIBRARIES.'/joomla/document/html/renderer/head.php');
$header_renderer = new JDocumentRendererHead($doc);
$header_contents = $header_renderer->render(null);
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<?php echo $header_contents; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$header = ob_get_clean();
echo $header.$body;;
