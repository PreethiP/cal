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
class GantryFeatureJfLogoMenu extends GantryFeature {
    var $_feature_name = 'jf_logomenu';
	function render($position="header-a") {
	    ob_start();
	    ?>
			<script language="javascript">jQuery(document).ready(function($){var jfmodalboxdocheight=$(document).height();var jfmodalcontentheight=$('#jf-logomodalcontent').height();var jfmodalcontentwidth=$('#jf-logomodalcontent').width();$("#jf-logomodalbutton").click(function(){$('#jf-logomodalbackout').css({'height':jfmodalboxdocheight}).fadeIn(500);$('#jf-logomodalcontent').css({'height':jfmodalcontentheight,'width':jfmodalcontentwidth,'left':$(window).width()/2-jfmodalcontentwidth/2,'top':$(window).height()/2-jfmodalcontentheight/2}).fadeIn(300)});$("#jf-logomodalbackout").click(function(){$(this).fadeOut(300);$(this).next().fadeOut(300)});$(".jf-logomodalclose").click(function(){$(this).parent().parent().fadeOut(300);$(this).parent().parent().prev().fadeOut(300)})});</script>
			<a id="jf-logomodalbutton" class="jf-tipsy-n" title="<?php echo $this->get('jf_logomenu_button_tooltip_text'); ?>"></a>
			<div id="jf-logomodal">
				<div id="jf-logomodalbackout"></div>
				<div id="jf-logomodalcontent">
					<div id="jf-logomenu-items">
						<div class="jf-center">
							<a href="<?php echo $this->get('jf_logomenu_centerbutton_link'); ?>" target="<?php echo $this->get('jf_logomenu_centerbutton_link_target'); ?>"></a>
							<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_centerbutton_text'); ?></span>
						</div>
						<div class="jf-topleft">
							<a href="<?php echo $this->get('jf_logomenu_topleftbutton_link'); ?>" target="<?php echo $this->get('jf_logomenu_topleftbutton_link_target'); ?>"></a>
							<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_topleftbutton_text'); ?></span>
						</div>
						<div class="jf-topright">
							<a href="<?php echo $this->get('jf_logomenu_toprightbutton_link'); ?>" target="<?php echo $this->get('jf_logomenu_toprightbutton_link_target'); ?>"></a>
							<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_toprightbutton_text'); ?></span>
						</div>
						<div class="jf-bottomleft">
							<a href="<?php echo $this->get('jf_logomenu_bottomleftbutton_link'); ?>" target="<?php echo $this->get('jf_logomenu_bottomleftbutton_link_target'); ?>"></a>
							<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_bottomlefbutton_text'); ?></span>
						</div>
						<div class="jf-bottomright">
							<a href="<?php echo $this->get('jf_logomenu_bottomrightbutton_link'); ?>" target="<?php echo $this->get('jf_logomenu_bottomrightbutton_link_target'); ?>"></a>
							<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_bottomrightbutton_text'); ?></span>
						</div>
						<div class="jf-bottom">
							<a href="<?php echo $this->get('jf_logomenu_bottombutton_link'); ?>" target="<?php echo $this->get('jf_logomenu_bottombutton_link_target'); ?>"></a>
							<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_bottombutton_text'); ?></span>
						</div>
					</div>
					<div id="jf-logomenu-close">
						<div class="jf-logomodalclose"></div>
						<span class="jf-logomenu-title"><?php echo $this->get('jf_logomenu_closebutton_text'); ?></span>
					</div>
					
				</div>
			</div>
			
		<?php
	    return ob_get_clean();
	}
}