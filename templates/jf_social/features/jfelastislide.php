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
class GantryFeatureJfElastiSlide extends GantryFeature {
    var $_feature_name = 'jf_elastislide';

	function render($position="jf-elastislide") {
	    ob_start();
	    ?>
			<script src="<?php echo JURI::root();?>/templates/jf_social/js/jquery.elastislide.js" type="text/javascript"></script>
			<script type="text/javascript">jQuery('#jf-elastislide-2,#jf-elastislide-1,#jf-elastislide-3,#jf-elastislide-4,#jf-elastislide-5').elastislide({speed:<?php echo $this->get('jf_elastislide_speed'); ?>,easing:'<?php echo $this->get('jf_elastislide_easing'); ?>',imageW:<?php echo $this->get('jf_elastislide_imagewidth'); ?>,minItems:<?php echo $this->get('jf_elastislide_minitems'); ?>});</script>
		<?php
	    return ob_get_clean();
	}
	
}