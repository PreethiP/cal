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
class GantryFeatureJfTinyCarousel extends GantryFeature {
    var $_feature_name = 'jf_tinycarousel';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jftinycarouselspeed = $this->get('jf_tinycarousel_speed');
			$jftinycarouselinterval = $this->get('jf_tinycarousel_interval');
			$jftinycarouselautoplay = $this->get('jf_tinycarousel_autoplay');
			$jftinycarouselnavigation = $this->get('jf_tinycarousel_navigation');
			
            $gantry->addScript('jquery.tinycarousel.min.js');
            $gantry->addInlineScript('jQuery(document).ready(function($){$("#jf-tinycarousel").tinycarousel({duration:"'.$jftinycarouselspeed.'",intervaltime:"'.$jftinycarouselinterval.'",interval:'.$jftinycarouselautoplay.',axis:"'.$jftinycarouselnavigation.'"});});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}