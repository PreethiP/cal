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
class GantryFeatureJfPirobox extends GantryFeature {
    var $_feature_name = 'jf_pirobox';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$doc = & JFactory::getDocument();
			$getapp = & JFactory::getApplication();
			$template = $getapp->getTemplate();
			$template_dir = JURI::base().'templates/'.$template;
			
			$jf_pirobox_style = $this->get('jf_pirobox_style');
			$jf_pirobox_overlaybg = $this->get('jf_pirobox_overlaybg');
			$jf_pirobox_speed = $this->get('jf_pirobox_speed');
			$jf_pirobox_bgopacity = $this->get('jf_pirobox_bgopacity');
			$jf_pirobox_resize = $this->get('jf_pirobox_resize');
			$jf_pirobox_zoom = $this->get('jf_pirobox_zoom');
			$jf_pirobox_move = $this->get('jf_pirobox_move');
			$jf_pirobox_scroll = $this->get('jf_pirobox_scroll');
			$jf_pirobox_share = $this->get('jf_pirobox_share');
			
			$doc->addStyleSheet($template_dir.'/js/jf_pirobox/css_pirobox/'.$jf_pirobox_style.'/style.css');
			$gantry->addInlineStyle(".piro_overlay {background:".$jf_pirobox_overlaybg."!important}");
            $gantry->addScript('pirobox_jquery_ui.min.js');
			$gantry->addScript('pirobox_extended-1.3.js');
			$gantry->addInlineScript('jQuery(document).ready(function($){$.pirobox_ext({attribute:"rel",piro_speed:'.$jf_pirobox_speed.',bg_alpha:'.$jf_pirobox_bgopacity.',resize:'.$jf_pirobox_resize.',zoom_mode:'.$jf_pirobox_zoom.',move_mode:"'.$jf_pirobox_move.'",piro_scroll:'.$jf_pirobox_scroll.',share:'.$jf_pirobox_share.'})});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}