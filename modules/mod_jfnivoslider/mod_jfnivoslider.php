<?php
/**
 * JF NivoSlider
 * @copyright (C) 2011-2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die;

$base = JURI::base();
$assets_path = $base."templates/jf_social/js/jf_nivoslider/";

$doc =& JFactory::getDocument();
$doc->addStyleSheet($assets_path."nivo-slider.css");
$doc->addStyleSheet($assets_path."themes/default/default.css");

// Nivo Core Params
$jfNivoEffect		 = $params->get('jfNivoEffect','');
$jfNivoSlices	 	 = $params->get('jfNivoSlices','');
$jfNivoBoxCols		 = $params->get('jfNivoBoxCols','');
$jfNivoBoxRows		 = $params->get('jfNivoBoxRows','');
$jfNivoAnimSpeed	 = $params->get('jfNivoAnimSpeed','');
$jfNivoPauseTime  	 = $params->get('jfNivoPauseTime','');
$jfNivoDirectionNav	 = $params->get('jfNivoDirectionNav','');
$jfNivoControlNav  	 = $params->get('jfNivoControlNav','');
$jfNivoPauseOnHover  = $params->get('jfNivoPauseOnHover','');
$jfNivoRandomStart	 = $params->get('jfNivoRandomStart','');

if ($params->get('jfNivo_loadjquery', '1')) {
	$doc->addScript("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js");
}
if ($params->get('jfNivo_loadjquery_noconflict', '1')) {
	$doc->addScript($base.'templates/jf_social/js/jquery.noconflict.js');
}

// Slide #1 params
$jfnivo_slide_1					= $params->get('jfnivo_slide_1','');
$jfnivo_slide_1_link			= $params->get('jfnivo_slide_1_link','');
$jfnivo_slide_1_link_target		= $params->get('jfnivo_slide_1_link_target','');
$jfnivo_slide_1_title			= $params->get('jfnivo_slide_1_title','');
// Slide #2 params
$jfnivo_slide_2					= $params->get('jfnivo_slide_2','');
$jfnivo_slide_2_link			= $params->get('jfnivo_slide_2_link','');
$jfnivo_slide_2_link_target		= $params->get('jfnivo_slide_2_link_target','');
$jfnivo_slide_2_title			= $params->get('jfnivo_slide_2_title','');
// Slide #3 params
$jfnivo_slide_3					= $params->get('jfnivo_slide_3','');
$jfnivo_slide_3_link			= $params->get('jfnivo_slide_3_link','');
$jfnivo_slide_3_link_target		= $params->get('jfnivo_slide_3_link_target','');
$jfnivo_slide_3_title			= $params->get('jfnivo_slide_3_title','');
// Slide #4 params
$jfnivo_slide_4					= $params->get('jfnivo_slide_4','');
$jfnivo_slide_4_link			= $params->get('jfnivo_slide_4_link','');
$jfnivo_slide_4_link_target		= $params->get('jfnivo_slide_4_link_target','');
$jfnivo_slide_4_title			= $params->get('jfnivo_slide_4_title','');
// Slide #5 params
$jfnivo_slide_5					= $params->get('jfnivo_slide_5','');
$jfnivo_slide_5_link			= $params->get('jfnivo_slide_5_link','');
$jfnivo_slide_5_link_target		= $params->get('jfnivo_slide_5_link_target','');
$jfnivo_slide_5_title			= $params->get('jfnivo_slide_5_title','');
// Slide #6 params
$jfnivo_slide_6					= $params->get('jfnivo_slide_6','');
$jfnivo_slide_6_link			= $params->get('jfnivo_slide_6_link','');
$jfnivo_slide_6_link_target		= $params->get('jfnivo_slide_6_link_target','');
$jfnivo_slide_6_title			= $params->get('jfnivo_slide_6_title','');
// Slide #7 params
$jfnivo_slide_7					= $params->get('jfnivo_slide_7','');
$jfnivo_slide_7_link			= $params->get('jfnivo_slide_7_link','');
$jfnivo_slide_7_link_target		= $params->get('jfnivo_slide_7_link_target','');
$jfnivo_slide_7_title			= $params->get('jfnivo_slide_7_title','');
// Slide #8 params
$jfnivo_slide_8					= $params->get('jfnivo_slide_8','');
$jfnivo_slide_8_link			= $params->get('jfnivo_slide_8_link','');
$jfnivo_slide_8_link_target		= $params->get('jfnivo_slide_8_link_target','');
$jfnivo_slide_8_title			= $params->get('jfnivo_slide_8_title','');
// Slide #9 params
$jfnivo_slide_9					= $params->get('jfnivo_slide_9','');
$jfnivo_slide_9_link			= $params->get('jfnivo_slide_9_link','');
$jfnivo_slide_9_link_target		= $params->get('jfnivo_slide_9_link_target','');
$jfnivo_slide_9_title			= $params->get('jfnivo_slide_9_title','');
// Slide #10 params
$jfnivo_slide_10				= $params->get('jfnivo_slide_10','');
$jfnivo_slide_10_link			= $params->get('jfnivo_slide_10_link','');
$jfnivo_slide_10_link_target	= $params->get('jfnivo_slide_10_link_target','');
$jfnivo_slide_10_title			= $params->get('jfnivo_slide_10_title','');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_jfnivoslider', $params->get('layout', 'default'));