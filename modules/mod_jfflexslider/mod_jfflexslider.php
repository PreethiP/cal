<?php
/**
 * JF FlexSlider
 * @copyright (C) 2011-2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die;

$base = JURI::base();
$assets_path = $base."templates/jf_social/js/jf_flexslider/";

$doc =& JFactory::getDocument();
$doc->addStyleSheet($assets_path."flexslide.css");

// Flex Core Params
$jfFlexAnimSpd		 = $params->get('jfFlexAnimSpd','');
$jfFlexInImgAnimSpd	 = $params->get('jfFlexInImgAnimSpd','');
$jfFlexControlNav	 = $params->get('jfFlexControlNav','');
$jfFlexDirctNav		 = $params->get('jfFlexDirctNav','');
$jfFlexPauseOnHov  	 = $params->get('jfFlexPauseOnHov','');
$jfFlexKeyboard 	 = $params->get('jfFlexKeyboard','');
$jfFlexMousewheel  	 = $params->get('jfFlexMousewheel','');
$jfFlexTouch 		 = $params->get('jfFlexTouch','');
$jfFlexSlideDirect	 = $params->get('jfFlexSlideDirect','');
$jfFlexReverse		 = $params->get('jfFlexReverse','');
$jfFlexRandomize	 = $params->get('jfFlexRandomize','');


if ($params->get('jfFlex_loadjquery', '1')) {
	$doc->addScript("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js");
}
if ($params->get('jfFlex_loadjquery_noconflict', '1')) {
	$doc->addScript($base.'templates/jf_social/js/jquery.noconflict.js');
}

// Slide #1 params
$jfflex_slide_1_image_1				= $params->get('jfflex_slide_1_image_1','');
$jfflex_slide_1_image_2				= $params->get('jfflex_slide_1_image_2','');
$jfflex_slide_1_image_3				= $params->get('jfflex_slide_1_image_3','');
$jfflex_slide_1_image_4				= $params->get('jfflex_slide_1_image_4','');
$jfflex_slide_1_title				= $params->get('jfflex_slide_1_title','');
$jfflex_slide_1_title_style			= $params->get('jfflex_slide_1_title_style','');
$jfflex_slide_1_small_btn_text		= $params->get('jfflex_slide_1_small_btn_text','');
$jfflex_slide_1_small_btn_link		= $params->get('jfflex_slide_1_small_btn_link','');
$jfflex_slide_1_small_btn_target	= $params->get('jfflex_slide_1_small_btn_target','');
$jfflex_slide_1_small_btn_style		= $params->get('jfflex_slide_1_small_btn_style','');
$jfflex_slide_1_big_btn_text		= $params->get('jfflex_slide_1_big_btn_text','');
$jfflex_slide_1_big_btn_link		= $params->get('jfflex_slide_1_big_btn_link','');
$jfflex_slide_1_big_btn_target		= $params->get('jfflex_slide_1_big_btn_target','');
$jfflex_slide_1_big_btn_style		= $params->get('jfflex_slide_1_big_btn_style','');
// Slide #2 params
$jfflex_slide_2_image_1				= $params->get('jfflex_slide_2_image_1','');
$jfflex_slide_2_image_2				= $params->get('jfflex_slide_2_image_2','');
$jfflex_slide_2_image_3				= $params->get('jfflex_slide_2_image_3','');
$jfflex_slide_2_image_4				= $params->get('jfflex_slide_2_image_4','');
$jfflex_slide_2_title				= $params->get('jfflex_slide_2_title','');
$jfflex_slide_2_title_style			= $params->get('jfflex_slide_2_title_style','');
$jfflex_slide_2_small_btn_text		= $params->get('jfflex_slide_2_small_btn_text','');
$jfflex_slide_2_small_btn_link		= $params->get('jfflex_slide_2_small_btn_link','');
$jfflex_slide_2_small_btn_target	= $params->get('jfflex_slide_2_small_btn_target','');
$jfflex_slide_2_small_btn_style		= $params->get('jfflex_slide_2_small_btn_style','');
$jfflex_slide_2_big_btn_text		= $params->get('jfflex_slide_2_big_btn_text','');
$jfflex_slide_2_big_btn_link		= $params->get('jfflex_slide_2_big_btn_link','');
$jfflex_slide_2_big_btn_target		= $params->get('jfflex_slide_2_big_btn_target','');
$jfflex_slide_2_big_btn_style		= $params->get('jfflex_slide_2_big_btn_style','');
// Slide #3 params
$jfflex_slide_3_image_1				= $params->get('jfflex_slide_3_image_1','');
$jfflex_slide_3_image_2				= $params->get('jfflex_slide_3_image_2','');
$jfflex_slide_3_image_3				= $params->get('jfflex_slide_3_image_3','');
$jfflex_slide_3_image_4				= $params->get('jfflex_slide_3_image_4','');
$jfflex_slide_3_title				= $params->get('jfflex_slide_3_title','');
$jfflex_slide_3_title_style			= $params->get('jfflex_slide_3_title_style','');
$jfflex_slide_3_small_btn_text		= $params->get('jfflex_slide_3_small_btn_text','');
$jfflex_slide_3_small_btn_link		= $params->get('jfflex_slide_3_small_btn_link','');
$jfflex_slide_3_small_btn_target	= $params->get('jfflex_slide_3_small_btn_target','');
$jfflex_slide_3_small_btn_style		= $params->get('jfflex_slide_3_small_btn_style','');
$jfflex_slide_3_big_btn_text		= $params->get('jfflex_slide_3_big_btn_text','');
$jfflex_slide_3_big_btn_link		= $params->get('jfflex_slide_3_big_btn_link','');
$jfflex_slide_3_big_btn_target		= $params->get('jfflex_slide_3_big_btn_target','');
$jfflex_slide_3_big_btn_style		= $params->get('jfflex_slide_3_big_btn_style','');
// Slide #4 params
$jfflex_slide_4_image_1				= $params->get('jfflex_slide_4_image_1','');
$jfflex_slide_4_image_2				= $params->get('jfflex_slide_4_image_2','');
$jfflex_slide_4_image_3				= $params->get('jfflex_slide_4_image_3','');
$jfflex_slide_4_image_4				= $params->get('jfflex_slide_4_image_4','');
$jfflex_slide_4_title				= $params->get('jfflex_slide_4_title','');
$jfflex_slide_4_title_style			= $params->get('jfflex_slide_4_title_style','');
$jfflex_slide_4_small_btn_text		= $params->get('jfflex_slide_4_small_btn_text','');
$jfflex_slide_4_small_btn_link		= $params->get('jfflex_slide_4_small_btn_link','');
$jfflex_slide_4_small_btn_target	= $params->get('jfflex_slide_4_small_btn_target','');
$jfflex_slide_4_small_btn_style		= $params->get('jfflex_slide_4_small_btn_style','');
$jfflex_slide_4_big_btn_text		= $params->get('jfflex_slide_4_big_btn_text','');
$jfflex_slide_4_big_btn_link		= $params->get('jfflex_slide_4_big_btn_link','');
$jfflex_slide_4_big_btn_target		= $params->get('jfflex_slide_4_big_btn_target','');
$jfflex_slide_4_big_btn_style		= $params->get('jfflex_slide_4_big_btn_style','');
// Slide #5 params
$jfflex_slide_5_image_1				= $params->get('jfflex_slide_5_image_1','');
$jfflex_slide_5_image_2				= $params->get('jfflex_slide_5_image_2','');
$jfflex_slide_5_image_3				= $params->get('jfflex_slide_5_image_3','');
$jfflex_slide_5_image_4				= $params->get('jfflex_slide_5_image_4','');
$jfflex_slide_5_title				= $params->get('jfflex_slide_5_title','');
$jfflex_slide_5_title_style			= $params->get('jfflex_slide_5_title_style','');
$jfflex_slide_5_small_btn_text		= $params->get('jfflex_slide_5_small_btn_text','');
$jfflex_slide_5_small_btn_link		= $params->get('jfflex_slide_5_small_btn_link','');
$jfflex_slide_5_small_btn_target	= $params->get('jfflex_slide_5_small_btn_target','');
$jfflex_slide_5_small_btn_style		= $params->get('jfflex_slide_5_small_btn_style','');
$jfflex_slide_5_big_btn_text		= $params->get('jfflex_slide_5_big_btn_text','');
$jfflex_slide_5_big_btn_link		= $params->get('jfflex_slide_5_big_btn_link','');
$jfflex_slide_5_big_btn_target		= $params->get('jfflex_slide_5_big_btn_target','');
$jfflex_slide_5_big_btn_style		= $params->get('jfflex_slide_5_big_btn_style','');
// Slide #6 params
$jfflex_slide_6_image_1				= $params->get('jfflex_slide_6_image_1','');
$jfflex_slide_6_image_2				= $params->get('jfflex_slide_6_image_2','');
$jfflex_slide_6_image_3				= $params->get('jfflex_slide_6_image_3','');
$jfflex_slide_6_image_4				= $params->get('jfflex_slide_6_image_4','');
$jfflex_slide_6_title				= $params->get('jfflex_slide_6_title','');
$jfflex_slide_6_title_style			= $params->get('jfflex_slide_6_title_style','');
$jfflex_slide_6_small_btn_text		= $params->get('jfflex_slide_6_small_btn_text','');
$jfflex_slide_6_small_btn_link		= $params->get('jfflex_slide_6_small_btn_link','');
$jfflex_slide_6_small_btn_target	= $params->get('jfflex_slide_6_small_btn_target','');
$jfflex_slide_6_small_btn_style		= $params->get('jfflex_slide_6_small_btn_style','');
$jfflex_slide_6_big_btn_text		= $params->get('jfflex_slide_6_big_btn_text','');
$jfflex_slide_6_big_btn_link		= $params->get('jfflex_slide_6_big_btn_link','');
$jfflex_slide_6_big_btn_target		= $params->get('jfflex_slide_6_big_btn_target','');
$jfflex_slide_6_big_btn_style		= $params->get('jfflex_slide_6_big_btn_style','');
// Slide #7 params
$jfflex_slide_7_image_1				= $params->get('jfflex_slide_7_image_1','');
$jfflex_slide_7_image_2				= $params->get('jfflex_slide_7_image_2','');
$jfflex_slide_7_image_3				= $params->get('jfflex_slide_7_image_3','');
$jfflex_slide_7_image_4				= $params->get('jfflex_slide_7_image_4','');
$jfflex_slide_7_title				= $params->get('jfflex_slide_7_title','');
$jfflex_slide_7_title_style			= $params->get('jfflex_slide_7_title_style','');
$jfflex_slide_7_small_btn_text		= $params->get('jfflex_slide_7_small_btn_text','');
$jfflex_slide_7_small_btn_link		= $params->get('jfflex_slide_7_small_btn_link','');
$jfflex_slide_7_small_btn_target	= $params->get('jfflex_slide_7_small_btn_target','');
$jfflex_slide_7_small_btn_style		= $params->get('jfflex_slide_7_small_btn_style','');
$jfflex_slide_7_big_btn_text		= $params->get('jfflex_slide_7_big_btn_text','');
$jfflex_slide_7_big_btn_link		= $params->get('jfflex_slide_7_big_btn_link','');
$jfflex_slide_7_big_btn_target		= $params->get('jfflex_slide_7_big_btn_target','');
$jfflex_slide_7_big_btn_style		= $params->get('jfflex_slide_7_big_btn_style','');
// Slide #8 params
$jfflex_slide_8_image_1				= $params->get('jfflex_slide_8_image_1','');
$jfflex_slide_8_image_2				= $params->get('jfflex_slide_8_image_2','');
$jfflex_slide_8_image_3				= $params->get('jfflex_slide_8_image_3','');
$jfflex_slide_8_image_4				= $params->get('jfflex_slide_8_image_4','');
$jfflex_slide_8_title				= $params->get('jfflex_slide_8_title','');
$jfflex_slide_8_title_style			= $params->get('jfflex_slide_8_title_style','');
$jfflex_slide_8_small_btn_text		= $params->get('jfflex_slide_8_small_btn_text','');
$jfflex_slide_8_small_btn_link		= $params->get('jfflex_slide_8_small_btn_link','');
$jfflex_slide_8_small_btn_target	= $params->get('jfflex_slide_8_small_btn_target','');
$jfflex_slide_8_small_btn_style		= $params->get('jfflex_slide_8_small_btn_style','');
$jfflex_slide_8_big_btn_text		= $params->get('jfflex_slide_8_big_btn_text','');
$jfflex_slide_8_big_btn_link		= $params->get('jfflex_slide_8_big_btn_link','');
$jfflex_slide_8_big_btn_target		= $params->get('jfflex_slide_8_big_btn_target','');
$jfflex_slide_8_big_btn_style		= $params->get('jfflex_slide_8_big_btn_style','');
// Slide #9 params
$jfflex_slide_9_image_1				= $params->get('jfflex_slide_9_image_1','');
$jfflex_slide_9_image_2				= $params->get('jfflex_slide_9_image_2','');
$jfflex_slide_9_image_3				= $params->get('jfflex_slide_9_image_3','');
$jfflex_slide_9_image_4				= $params->get('jfflex_slide_9_image_4','');
$jfflex_slide_9_title				= $params->get('jfflex_slide_9_title','');
$jfflex_slide_9_title_style			= $params->get('jfflex_slide_9_title_style','');
$jfflex_slide_9_small_btn_text		= $params->get('jfflex_slide_9_small_btn_text','');
$jfflex_slide_9_small_btn_link		= $params->get('jfflex_slide_9_small_btn_link','');
$jfflex_slide_9_small_btn_target	= $params->get('jfflex_slide_9_small_btn_target','');
$jfflex_slide_9_small_btn_style		= $params->get('jfflex_slide_9_small_btn_style','');
$jfflex_slide_9_big_btn_text		= $params->get('jfflex_slide_9_big_btn_text','');
$jfflex_slide_9_big_btn_link		= $params->get('jfflex_slide_9_big_btn_link','');
$jfflex_slide_9_big_btn_target		= $params->get('jfflex_slide_9_big_btn_target','');
$jfflex_slide_9_big_btn_style		= $params->get('jfflex_slide_9_big_btn_style','');
// Slide #10 params
$jfflex_slide_10_image_1			= $params->get('jfflex_slide_10_image_1','');
$jfflex_slide_10_image_2			= $params->get('jfflex_slide_10_image_2','');
$jfflex_slide_10_image_3			= $params->get('jfflex_slide_10_image_3','');
$jfflex_slide_10_image_4			= $params->get('jfflex_slide_10_image_4','');
$jfflex_slide_10_title				= $params->get('jfflex_slide_10_title','');
$jfflex_slide_10_title_style		= $params->get('jfflex_slide_10_title_style','');
$jfflex_slide_10_small_btn_text		= $params->get('jfflex_slide_10_small_btn_text','');
$jfflex_slide_10_small_btn_link		= $params->get('jfflex_slide_10_small_btn_link','');
$jfflex_slide_10_small_btn_target	= $params->get('jfflex_slide_10_small_btn_target','');
$jfflex_slide_10_small_btn_style	= $params->get('jfflex_slide_10_small_btn_style','');
$jfflex_slide_10_big_btn_text		= $params->get('jfflex_slide_10_big_btn_text','');
$jfflex_slide_10_big_btn_link		= $params->get('jfflex_slide_10_big_btn_link','');
$jfflex_slide_10_big_btn_target		= $params->get('jfflex_slide_10_big_btn_target','');
$jfflex_slide_10_big_btn_style		= $params->get('jfflex_slide_10_big_btn_style','');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_jfflexslider', $params->get('layout', 'default'));