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
class GantryFeatureJfPortfolio extends GantryFeature {
    var $_feature_name = 'jf_portfolio';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jf_portfolio_ie_speed = $this->get('jf_portfolio_ie_speed');
			$jf_portfolio_mo_speed = $this->get('jf_portfolio_mo_speed');
			
			$gantry->addInlineStyle(".isotope,.isotope .isotope-item{-webkit-transition-duration:".$jf_portfolio_mo_speed ."s;-moz-transition-duration:".$jf_portfolio_mo_speed ."s;-o-transition-duration:".$jf_portfolio_mo_speed ."s;transition-duration:".$jf_portfolio_mo_speed ."s;}");
            $gantry->addScript('jquery.isotope.min.js');
            $gantry->addInlineScript('jQuery(document).ready(function($){var jf_portfolio_items=$("#jf_portfolio_items");jf_portfolio_items.imagesLoaded(function(){jf_portfolio_items.isotope({itemSelector:"#jf_portfolio_items li",animationEngine:"best-available",animationOptions:{queue:false,duration:'.$jf_portfolio_ie_speed.'},layoutMode:"masonry",});jf_portfolio_items.isotope({masonry:{columnWidth:0}});});$("#jf_portfolio_filter li").click(function(){$("#jf_portfolio_filter li").removeClass("current");$(this).addClass("current");var jf_portfolio_filter=$(this).attr("data-filter");jf_portfolio_items.isotope({filter:jf_portfolio_filter});return false})});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}