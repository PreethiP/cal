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
class GantryFeatureJfQuovolver extends GantryFeature {
    var $_feature_name = 'jf_quovolver';

	function init() {
		global $gantry, $option;

		if ($this->get('enabled')) {
			
			$jf_quovolver_speed = $this->get('jf_quovolver_speed');
			$jf_quovolver_autoplay = $this->get('jf_quovolver_autoplay');
			$jf_quovolver_autoplayspeed = $this->get('jf_quovolver_autoplayspeed');
			$jf_quovolver_pauseonhover = $this->get('jf_quovolver_pauseonhover');
			$jf_quovolver_equalheight = $this->get('jf_quovolver_equalheight');
			$jf_quovolver_navigation = $this->get('jf_quovolver_navigation');
			
            $gantry->addScript('jquery.quovolver.js');
            $gantry->addInlineScript('jQuery(document).ready(function($){$("#jf_quovolver").quovolver({children:"li",transitionSpeed:'.$jf_quovolver_speed.',autoPlay:'.$jf_quovolver_autoplay.',autoPlaySpeed:'.$jf_quovolver_autoplayspeed.',pauseOnHover:'.$jf_quovolver_pauseonhover.',equalHeight:'.$jf_quovolver_equalheight.',navPosition:"above",navNum:'.$jf_quovolver_navigation.'})});');
			
		}
		
    }

	function isOrderable() {
		return false;
	}

}