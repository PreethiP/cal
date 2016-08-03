<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		3.2.20 June 19, 2012
 * @author		RocketTheme http://www.rockettheme.com
 * @copyright 	Copyright (C) 2007 - 2012 RocketTheme, LLC
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
class GantryFeatureJfNiceScroll extends GantryFeature {
    var $_feature_name = 'jf_nicescroll';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled') && $this->get('touchbehavior')) {
			
			$cursorcolor = $this->get('cursorcolor');
			$cursoractivecolor = $this->get('cursoractivecolor');
			$cursoropacitymax = $this->get('cursoropacitymax');
			$cursorwidth = $this->get('cursorwidth');
			$cursorborder = $this->get('cursorborder');
			$cursorborderradius = $this->get('cursorborderradius');
			
            $gantry->addScript('jquery.nicescroll.min.js');
			$gantry->addInlineStyle("#ascrail2000 div:active{background:".$cursoractivecolor."!important}");
            $gantry->addInlineScript('jQuery(document).ready(function(){jQuery("html").niceScroll({touchbehavior:true,cursorcolor:"'.$cursorcolor.'",cursoropacitymax:'.$cursoropacitymax.',cursorwidth:'.$cursorwidth.',cursorborder:"'.$cursorborder.'",cursorborderradius:"'.$cursorborderradius.'"})});');
			
		}
		
        elseif ($this->get('enabled')) {
		
			$cursorcolor = $this->get('cursorcolor');
			$cursoractivecolor = $this->get('cursoractivecolor');
			$cursoropacitymax = $this->get('cursoropacitymax');
			$cursorwidth = $this->get('cursorwidth');
			$cursorborder = $this->get('cursorborder');
			$cursorborderradius = $this->get('cursorborderradius');
			
            $gantry->addScript('jquery.nicescroll.min.js');
			$gantry->addInlineStyle("#ascrail2000 div:active{background:".$cursoractivecolor."!important}");
            $gantry->addInlineScript('jQuery(document).ready(function(){jQuery("html").niceScroll({touchbehavior:false,cursorcolor:"'.$cursorcolor.'",cursoropacitymax:'.$cursoropacitymax.',cursorwidth:'.$cursorwidth.',cursorborder:"'.$cursorborder.'",cursorborderradius:"'.$cursorborderradius.'"})});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}