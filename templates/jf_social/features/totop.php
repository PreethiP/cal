<?php
/**
 * @version   $Id: totop.php 2487 2012-08-17 22:04:06Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureToTop extends GantryFeature
{
	var $_feature_name = 'totop';

	function init()
	{
		/** @var $gantry Gantry */
		global $gantry;

		if ($this->get('enabled')) {
			$gantry->addScript('gantry-totop.js');
		}
	}

	function render($position)
	{
		ob_start();
		?>
	<div class="clear"></div>
	<div class="jf-scrolltop-block">
		<a href="#" id="gantry-totop" rel="nofollow"></a>
	</div>
	<?php
		return ob_get_clean();
	}
}