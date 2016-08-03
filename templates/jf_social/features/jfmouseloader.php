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
class GantryFeatureJfMouseLoader extends GantryFeature {
    var $_feature_name = 'jf_mouseloader';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jf_mouseloader_color = $this->get('jf_mouseloader_color');
			$jf_mouseloader_style = '#jf_circleX{top:-100px;display:none;position:absolute;z-index:9999999999;}#jf_circlecolor{color:'.$jf_mouseloader_color.';display:none;}';
			
            $gantry->addScript('joomforest_mouse_loader.js');
			$gantry->addInlineStyle($jf_mouseloader_style);
            $gantry->addInlineScript('jQuery(window).bind("beforeunload",function(){jf_mouseshowLoading5seconds()});jQuery(window).load(function(){jQuery("#jf-logomodalbutton,.jf-logomodalclose,.jf-login-button,.jf-loginclose,.jf-js-login-button,.jf-js-loginclose,.jf-info-text-content-close,.jf-language-button,.jf-tc-next a,.jf_typo_toggle_trigger").click(function(){jf_mouseshowLoading01seconds()});jQuery(".flex-control-nav a,.flex-direction-nav a").click(function(){jf_mouseshowLoading02seconds()})});');
			
		}
    }

	function isOrderable() {
		return false;
	}

}