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
class GantryFeatureJfPreloader extends GantryFeature {
    var $_feature_name = 'jf_preloader';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jf_preloader_afterpreloaderdur = $this->get('jf_preloader_afterpreloaderdur');
			$jf_preloader_preloaderfadeoutdur = $this->get('jf_preloader_preloaderfadeoutdur');
			$jf_preloader_logofadeindur = $this->get('jf_preloader_logofadeindur');
			$jf_preloader_backgroundcolor = $this->get('jf_preloader_backgroundcolor');
			$jf_preloader_indicatorcolor = $this->get('jf_preloader_indicatorcolor');
			$jf_preloader_indicatorheight = $this->get('jf_preloader_indicatorheight');
			$jf_preloader_progressbarcolor = $this->get('jf_preloader_progressbarcolor');
			$jf_preloader_progressbarfontsize = $this->get('jf_preloader_progressbarfontsize');
			
			$gantry->addInlineStyle("#jf-preloader{display:block;background-color:".$jf_preloader_backgroundcolor."}");
            $gantry->addScript('jquery.waitforimages.js');
			$gantry->addInlineScript('jQuery(document).ready(function(){var jfwindowpreloaderheight=jQuery(document).height();jQuery("#jf-component-trans").css("overflow","hidden").waitForImages({finished:function(){jQuery("#jf-middlepanel-button").css({"left":"-450px"});jQuery("#jf-preloader").css({"display":"block","height":jfwindowpreloaderheight}).delay('.$jf_preloader_afterpreloaderdur.').fadeOut('.$jf_preloader_preloaderfadeoutdur.',function(){jQuery("#jf-component-trans").css("overflow","auto");jQuery("#jf-middlepanel-button").animate({"left":"-45px"},500)})},each:function(n,c){jQuery("#jf-preloader #jf-indicator").css({"height":"'.$jf_preloader_indicatorheight.'","background":"'.$jf_preloader_indicatorcolor.'"}).stop(true).animate({width:parseInt(n*100/c)+"%"},"fast");jQuery("#jf-preloader-logo").fadeIn('.$jf_preloader_logofadeindur.');jQuery("#jf-preloader #jf-progress").css({"color":"'.$jf_preloader_progressbarcolor.'","font-size":"'.$jf_preloader_progressbarfontsize.'",}).text(parseInt(n*100/c)+"%")},waitForAll:true})});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}