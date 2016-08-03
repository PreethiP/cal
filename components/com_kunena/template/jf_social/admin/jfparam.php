<?php
/**
 * @package 	formfield
 * @version		2.2
 * @created		August 2012

 * @author		JoomForest
 * @email		support@joomforest.com
 * @website		http://www.joomforest.com
 * @copyright	Copyright (C) 2012 JoomForest. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 */
defined('_JEXEC') or die( 'Restricted access' );
class JElementJfparam extends JElement
{
	var	$_name = 'Jfparam';
	function fetchElement( $name, $value, &$node, $control_name ) {
		$document	= &JFactory::getDocument();
		$document->addStyleSheet(JURI::root().'components/com_kunena/template/jf_social/admin/css/jf.css');
		$document->addStyleSheet(JURI::root().'components/com_kunena/template/jf_social/admin/js/colorpicker/colorpicker.css');
		$document->addStyleSheet(JURI::root().'components/com_kunena/template/jf_social/admin/css/chosen.css');
		$document->addScript(JURI::root().'components/com_kunena/template/jf_social/admin/js/jquery-1.8.0.min.js');
		$document->addScript(JURI::root().'components/com_kunena/template/jf_social/admin/js/chosen.jquery.min.js');
		$document->addScript(JURI::root().'components/com_kunena/template/jf_social/admin/js/colorpicker/colorpicker.js');
		$document->addScript(JURI::root().'components/com_kunena/template/jf_social/admin/js/jquery.tipsy.js');
		$document->addScript(JURI::root().'components/com_kunena/template/jf_social/admin/js/jf-plan-b.js');
		$html = '<div class="jf-baby"></div>';
		return $html;
	}
} 