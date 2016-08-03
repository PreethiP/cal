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
class GantryFeatureJfStickyHeader extends GantryFeature {
    var $_feature_name = 'jf_stickyheader';

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
			
			$gantry->addInlineStyle("
				#jf-header{position:fixed;top:0;height:110px;}
				#jf-header.sticky{position:fixed;top:0;height:95px !important;padding:0;}
				#jf-header.sticky #jf-undermenu a{margin:0}
				#jf-header.sticky .menutop li.root > .item{height:1.9em;}
				#jf-header.sticky .menutop li.root > .item span{line-height:2.0em;}



			
			");
            $gantry->addInlineScript("
				jQuery(document).ready(function() {
					jQuery(function(){
							var headerheight 	= jQuery('#jf-header').height();
							var stickyHeaderTop = jQuery('#jf-header').offset().top;
		
							jQuery('#jf-component-bg').css({'margin-top':headerheight+38});
							jQuery(window).scroll(function(){
									if( jQuery(window).scrollTop() > stickyHeaderTop+200 ) {
										jQuery('#jf-header').addClass('sticky');
									} else {
										jQuery('#jf-header').removeClass('sticky');
									}

							});
					});
				});
			");
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}