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
class GantryFeatureJfSoundClickHover extends GantryFeature {
    var $_feature_name = 'jf_soundclickhover';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jf_soundclickhover_hovertags = $this->get('jf_soundclickhover_hovertags');
			$jf_soundclickhover_clicktags = $this->get('jf_soundclickhover_clicktags');
			
            $gantry->addInlineScript('jQuery(document).ready(function(){if(jQuery.browser.msie){if(jQuery.browser.version=="9.0"){jQuery(window).bind("load",init)}}else{if(jQuery.browser.webkit){jQuery(window).bind("load",init)}else{if(jQuery.browser.mozilla){jQuery(window).bind("load",init)}else{if(jQuery.browser.opera){jQuery(window).bind("load",init)}}}}});function init(){myAudio=new Audio();var b=!(myAudio.canPlayType);btnSound=new Audio();var a=!!btnSound.canPlayType&&""!=btnSound.canPlayType("audio/mpeg");if(a){btnSound.src=btnSoundUrlMp3}else{btnSound.src=btnSoundUrlOgg}jQuery("'.$jf_soundclickhover_hovertags.'").mouseover(function(){btnSound.play()});jQuery("'.$jf_soundclickhover_clicktags.'").click(function(){btnSound.play()})}var btnSoundUrlMp3="'.$gantry->templateUrl.'/features/sounds/sound.mp3";var btnSoundUrlOgg="'.$gantry->templateUrl.'/features/sounds/sound.ogg";');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}