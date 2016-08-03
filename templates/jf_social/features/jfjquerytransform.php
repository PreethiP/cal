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
class GantryFeatureJfjqueryTransform extends GantryFeature {
    var $_feature_name = 'jf_jqtransform';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jf_jqtransform_tags = $this->get('jf_jqtransform_tags');
			
			$gantry->addstyle("jqtransform.css");
			$gantry->addScript("jquery.jqtransform.js");
            $gantry->addInlineScript('jQuery(document).ready(function($){$(function(){$("'.$jf_jqtransform_tags.'").jqTransform();});});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}