<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		1.0 _ 08.10.12
 * @author		JoomForest http://www.joomforest.com
 * @copyright 	Copyright (C) 2011 - 2012 JoomForest.com
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
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
class GantryFeatureJfTipsyTooltip extends GantryFeature {
    var $_feature_name = 'jf_tipsytooltip';
	
	function render($position="jf-tipsy-tooltip") {
	    ob_start();
	    ?>
			<script src="<?php echo JURI::base(); ?>templates/jf_social/js/jquery.tipsy.js" type="text/javascript"></script>
		<?php
	    return ob_get_clean();
	}
}