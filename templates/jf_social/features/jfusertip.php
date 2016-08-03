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
class GantryFeatureJfUserTip extends GantryFeature {
    var $_feature_name = 'jf_usertip';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {

			if ($this->get('jf_usertip_jquery_cookie')==1) {
				$gantry->addScript('jquery.cookie.min.js');
				$gantry->addInlineScript('jQuery(document).ready(function(a){a(function(){var c=a("#jf_tip");a("#jf_tip .jf_tip_btn").click(function(){a(this).parent().fadeOut();a.when(a(this).parent().fadeOut()).done(function(){a("#jf_tip .jf_tip_content").animate({opacity:"1"},"slow")})});a("#jf_tip .jf_tip_content_close").click(function(){a(this).parent().parent().parent().fadeOut();a.cookie("jf_tip","closed")});var b=a.cookie("jf_tip");if(b=="closed"){a("#jf_tip").addClass("closed")}})});');
			} else {
				$gantry->addInlineScript('jQuery(document).ready(function(a){a(function(){var b=a("#jf_tip");a("#jf_tip .jf_tip_btn").click(function(){a(this).parent().fadeOut();a.when(a(this).parent().fadeOut()).done(function(){a("#jf_tip .jf_tip_content").animate({opacity:"1"},"slow")})});a("#jf_tip .jf_tip_content_close").click(function(){a(this).parent().parent().parent().fadeOut()})})});');
			}
			
			$jf_usertip_bodercolor		 = $this->get('jf_usertip_bodercolor');
			$jf_usertip_firstcircle		 = $this->get('jf_usertip_firstcircle');
			$jf_usertip_secondcircle	 = $this->get('jf_usertip_secondcircle');
			$jf_usertip_thirdcircle		 = $this->get('jf_usertip_thirdcircle');
			$jf_usertip_fourthcircle	 = $this->get('jf_usertip_fourthcircle');

			$gantry->addInlineStyle(".jf_tip_btn{border:1px solid ".$jf_usertip_bodercolor."}.jf_tip_btn li:nth-child(1){background:".$jf_usertip_firstcircle."}.jf_tip_btn li:nth-child(2){background:".$jf_usertip_secondcircle."}.jf_tip_btn li:nth-child(3){background:".$jf_usertip_thirdcircle."}.jf_tip_btn li:nth-child(4){background:".$jf_usertip_fourthcircle."}");

		}
		
    }

	function isOrderable() {
		return false;
	}

}