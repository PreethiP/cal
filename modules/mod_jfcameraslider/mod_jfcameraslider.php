<?php
/**
 * JF CameraSlider
 * @copyright (C) 2011-2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die;

$base = JURI::base();
$assets_path = $base."templates/jf_social/js/jf_cameraslider/";

$doc =& JFactory::getDocument();
$doc->addStyleSheet($assets_path."css/camera.css");

// Camera Core Params
$jfCameraHeight			 = $params->get('jfCameraHeight','');
$jfCameraFx				 = $params->get('jfCameraFx','');
$jfCameraAnimSpeed		 = $params->get('jfCameraAnimSpeed','');
$jfCameraPauseTime		 = $params->get('jfCameraPauseTime','');
$jfCameraBoxCols		 = $params->get('jfCameraBoxCols','');
$jfCameraBoxRows		 = $params->get('jfCameraBoxRows','');
$jfCameraEasing			 = $params->get('jfCameraEasing','');
$jfCameraLoader			 = $params->get('jfCameraLoader','');
$jfCameraLoaderColor	 = $params->get('jfCameraLoaderColor','');
$jfCameraLoaderBGColor	 = $params->get('jfCameraLoaderBGColor','');
$jfCameraPieDiameter	 = $params->get('jfCameraPieDiameter','');
$jfCameraPiePosition	 = $params->get('jfCameraPiePosition','');
$jfCameraLoaderOpacity	 = $params->get('jfCameraLoaderOpacity','');
$jfCameraLoaderPadding	 = $params->get('jfCameraLoaderPadding','');
$jfCameraLoaderStroke	 = $params->get('jfCameraLoaderStroke','');
$jfCameraPauseOnHover	 = $params->get('jfCameraPauseOnHover','');
$jfCameraPlayPause		 = $params->get('jfCameraPlayPause','');
$jfCameraPauseOnClick	 = $params->get('jfCameraPauseOnClick','');
$jfCameraNav			 = $params->get('jfCameraNav','');
$jfCameraNavH			 = $params->get('jfCameraNavH','');
$jfCameraMobileNavH		 = $params->get('jfCameraMobileNavH','');
$jfCameraPag			 = $params->get('jfCameraPag','');
$jfCameraThumbs			 = $params->get('jfCameraThumbs','');

if ($params->get('jfCamera_loadjquery', '1')) {
	$doc->addScript("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js");
}
if ($params->get('jfCamera_loadjquery_noconflict', '1')) {
	$doc->addScript($base.'templates/jf_social/js/jquery.noconflict.js');
}

// Slide #1 params
$jfcamera_slide_1						= $params->get('jfcamera_slide_1','');
$jfcamera_slide_1_thumb					= $params->get('jfcamera_slide_1_thumb','');
$jfcamera_slide_1_caption_title			= $params->get('jfcamera_slide_1_caption_title','');
$jfcamera_slide_1_caption_descr			= $params->get('jfcamera_slide_1_caption_descr','');
$jfcamera_slide_1_caption_btn_text		= $params->get('jfcamera_slide_1_caption_btn_text','');
$jfcamera_slide_1_caption_btn_link		= $params->get('jfcamera_slide_1_caption_btn_link','');
$jfcamera_slide_1_caption_btn_target 	= $params->get('jfcamera_slide_1_caption_btn_target','');
$jfcamera_slide_1_caption_effect		= $params->get('jfcamera_slide_1_caption_effect','');
$jfcamera_slide_1_caption_posT			= $params->get('jfcamera_slide_1_caption_posT','');
$jfcamera_slide_1_caption_posL			= $params->get('jfcamera_slide_1_caption_posL','');
$jfcamera_slide_1_caption_posB			= $params->get('jfcamera_slide_1_caption_posB','');
$jfcamera_slide_1_caption_posR			= $params->get('jfcamera_slide_1_caption_posR','');
// Slide #2 params
$jfcamera_slide_2						= $params->get('jfcamera_slide_2','');
$jfcamera_slide_2_thumb					= $params->get('jfcamera_slide_2_thumb','');
$jfcamera_slide_2_caption_title			= $params->get('jfcamera_slide_2_caption_title','');
$jfcamera_slide_2_caption_descr			= $params->get('jfcamera_slide_2_caption_descr','');
$jfcamera_slide_2_caption_btn_text		= $params->get('jfcamera_slide_2_caption_btn_text','');
$jfcamera_slide_2_caption_btn_link		= $params->get('jfcamera_slide_2_caption_btn_link','');
$jfcamera_slide_2_caption_btn_target 	= $params->get('jfcamera_slide_2_caption_btn_target','');
$jfcamera_slide_2_caption_effect		= $params->get('jfcamera_slide_2_caption_effect','');
$jfcamera_slide_2_caption_posT			= $params->get('jfcamera_slide_2_caption_posT','');
$jfcamera_slide_2_caption_posL			= $params->get('jfcamera_slide_2_caption_posL','');
$jfcamera_slide_2_caption_posB			= $params->get('jfcamera_slide_2_caption_posB','');
$jfcamera_slide_2_caption_posR			= $params->get('jfcamera_slide_2_caption_posR','');
// Slide #3 params
$jfcamera_slide_3						= $params->get('jfcamera_slide_3','');
$jfcamera_slide_3_thumb					= $params->get('jfcamera_slide_3_thumb','');
$jfcamera_slide_3_caption_title			= $params->get('jfcamera_slide_3_caption_title','');
$jfcamera_slide_3_caption_descr			= $params->get('jfcamera_slide_3_caption_descr','');
$jfcamera_slide_3_caption_btn_text		= $params->get('jfcamera_slide_3_caption_btn_text','');
$jfcamera_slide_3_caption_btn_link		= $params->get('jfcamera_slide_3_caption_btn_link','');
$jfcamera_slide_3_caption_btn_target 	= $params->get('jfcamera_slide_3_caption_btn_target','');
$jfcamera_slide_3_caption_effect		= $params->get('jfcamera_slide_3_caption_effect','');
$jfcamera_slide_3_caption_posT			= $params->get('jfcamera_slide_3_caption_posT','');
$jfcamera_slide_3_caption_posL			= $params->get('jfcamera_slide_3_caption_posL','');
$jfcamera_slide_3_caption_posB			= $params->get('jfcamera_slide_3_caption_posB','');
$jfcamera_slide_3_caption_posR			= $params->get('jfcamera_slide_3_caption_posR','');
// Slide #4 params
$jfcamera_slide_4						= $params->get('jfcamera_slide_4','');
$jfcamera_slide_4_thumb					= $params->get('jfcamera_slide_4_thumb','');
$jfcamera_slide_4_caption_title			= $params->get('jfcamera_slide_4_caption_title','');
$jfcamera_slide_4_caption_descr			= $params->get('jfcamera_slide_4_caption_descr','');
$jfcamera_slide_4_caption_btn_text		= $params->get('jfcamera_slide_4_caption_btn_text','');
$jfcamera_slide_4_caption_btn_link		= $params->get('jfcamera_slide_4_caption_btn_link','');
$jfcamera_slide_4_caption_btn_target 	= $params->get('jfcamera_slide_4_caption_btn_target','');
$jfcamera_slide_4_caption_effect		= $params->get('jfcamera_slide_4_caption_effect','');
$jfcamera_slide_4_caption_posT			= $params->get('jfcamera_slide_4_caption_posT','');
$jfcamera_slide_4_caption_posL			= $params->get('jfcamera_slide_4_caption_posL','');
$jfcamera_slide_4_caption_posB			= $params->get('jfcamera_slide_4_caption_posB','');
$jfcamera_slide_4_caption_posR			= $params->get('jfcamera_slide_4_caption_posR','');
// Slide #5 params
$jfcamera_slide_5						= $params->get('jfcamera_slide_5','');
$jfcamera_slide_5_thumb					= $params->get('jfcamera_slide_5_thumb','');
$jfcamera_slide_5_caption_title			= $params->get('jfcamera_slide_5_caption_title','');
$jfcamera_slide_5_caption_descr			= $params->get('jfcamera_slide_5_caption_descr','');
$jfcamera_slide_5_caption_btn_text		= $params->get('jfcamera_slide_5_caption_btn_text','');
$jfcamera_slide_5_caption_btn_link		= $params->get('jfcamera_slide_5_caption_btn_link','');
$jfcamera_slide_5_caption_btn_target 	= $params->get('jfcamera_slide_5_caption_btn_target','');
$jfcamera_slide_5_caption_effect		= $params->get('jfcamera_slide_5_caption_effect','');
$jfcamera_slide_5_caption_posT			= $params->get('jfcamera_slide_5_caption_posT','');
$jfcamera_slide_5_caption_posL			= $params->get('jfcamera_slide_5_caption_posL','');
$jfcamera_slide_5_caption_posB			= $params->get('jfcamera_slide_5_caption_posB','');
$jfcamera_slide_5_caption_posR			= $params->get('jfcamera_slide_5_caption_posR','');
// Slide #6 params
$jfcamera_slide_6						= $params->get('jfcamera_slide_6','');
$jfcamera_slide_6_thumb					= $params->get('jfcamera_slide_6_thumb','');
$jfcamera_slide_6_caption_title			= $params->get('jfcamera_slide_6_caption_title','');
$jfcamera_slide_6_caption_descr			= $params->get('jfcamera_slide_6_caption_descr','');
$jfcamera_slide_6_caption_btn_text		= $params->get('jfcamera_slide_6_caption_btn_text','');
$jfcamera_slide_6_caption_btn_link		= $params->get('jfcamera_slide_6_caption_btn_link','');
$jfcamera_slide_6_caption_btn_target 	= $params->get('jfcamera_slide_6_caption_btn_target','');
$jfcamera_slide_6_caption_effect		= $params->get('jfcamera_slide_6_caption_effect','');
$jfcamera_slide_6_caption_posT			= $params->get('jfcamera_slide_6_caption_posT','');
$jfcamera_slide_6_caption_posL			= $params->get('jfcamera_slide_6_caption_posL','');
$jfcamera_slide_6_caption_posB			= $params->get('jfcamera_slide_6_caption_posB','');
$jfcamera_slide_6_caption_posR			= $params->get('jfcamera_slide_6_caption_posR','');
// Slide #7 params
$jfcamera_slide_7						= $params->get('jfcamera_slide_7','');
$jfcamera_slide_7_thumb					= $params->get('jfcamera_slide_7_thumb','');
$jfcamera_slide_7_caption_title			= $params->get('jfcamera_slide_7_caption_title','');
$jfcamera_slide_7_caption_descr			= $params->get('jfcamera_slide_7_caption_descr','');
$jfcamera_slide_7_caption_btn_text		= $params->get('jfcamera_slide_7_caption_btn_text','');
$jfcamera_slide_7_caption_btn_link		= $params->get('jfcamera_slide_7_caption_btn_link','');
$jfcamera_slide_7_caption_btn_target 	= $params->get('jfcamera_slide_7_caption_btn_target','');
$jfcamera_slide_7_caption_effect		= $params->get('jfcamera_slide_7_caption_effect','');
$jfcamera_slide_7_caption_posT			= $params->get('jfcamera_slide_7_caption_posT','');
$jfcamera_slide_7_caption_posL			= $params->get('jfcamera_slide_7_caption_posL','');
$jfcamera_slide_7_caption_posB			= $params->get('jfcamera_slide_7_caption_posB','');
$jfcamera_slide_7_caption_posR			= $params->get('jfcamera_slide_7_caption_posR','');
// Slide #8 params
$jfcamera_slide_8						= $params->get('jfcamera_slide_8','');
$jfcamera_slide_8_thumb					= $params->get('jfcamera_slide_8_thumb','');
$jfcamera_slide_8_caption_title			= $params->get('jfcamera_slide_8_caption_title','');
$jfcamera_slide_8_caption_descr			= $params->get('jfcamera_slide_8_caption_descr','');
$jfcamera_slide_8_caption_btn_text		= $params->get('jfcamera_slide_8_caption_btn_text','');
$jfcamera_slide_8_caption_btn_link		= $params->get('jfcamera_slide_8_caption_btn_link','');
$jfcamera_slide_8_caption_btn_target 	= $params->get('jfcamera_slide_8_caption_btn_target','');
$jfcamera_slide_8_caption_effect		= $params->get('jfcamera_slide_8_caption_effect','');
$jfcamera_slide_8_caption_posT			= $params->get('jfcamera_slide_8_caption_posT','');
$jfcamera_slide_8_caption_posL			= $params->get('jfcamera_slide_8_caption_posL','');
$jfcamera_slide_8_caption_posB			= $params->get('jfcamera_slide_8_caption_posB','');
$jfcamera_slide_8_caption_posR			= $params->get('jfcamera_slide_8_caption_posR','');
// Slide #9 params
$jfcamera_slide_9						= $params->get('jfcamera_slide_9','');
$jfcamera_slide_9_thumb					= $params->get('jfcamera_slide_9_thumb','');
$jfcamera_slide_9_caption_title			= $params->get('jfcamera_slide_9_caption_title','');
$jfcamera_slide_9_caption_descr			= $params->get('jfcamera_slide_9_caption_descr','');
$jfcamera_slide_9_caption_btn_text		= $params->get('jfcamera_slide_9_caption_btn_text','');
$jfcamera_slide_9_caption_btn_link		= $params->get('jfcamera_slide_9_caption_btn_link','');
$jfcamera_slide_9_caption_btn_target 	= $params->get('jfcamera_slide_9_caption_btn_target','');
$jfcamera_slide_9_caption_effect		= $params->get('jfcamera_slide_9_caption_effect','');
$jfcamera_slide_9_caption_posT			= $params->get('jfcamera_slide_9_caption_posT','');
$jfcamera_slide_9_caption_posL			= $params->get('jfcamera_slide_9_caption_posL','');
$jfcamera_slide_9_caption_posB			= $params->get('jfcamera_slide_9_caption_posB','');
$jfcamera_slide_9_caption_posR			= $params->get('jfcamera_slide_9_caption_posR','');
// Slide #10 params
$jfcamera_slide_10						= $params->get('jfcamera_slide_10','');
$jfcamera_slide_10_thumb				= $params->get('jfcamera_slide_10_thumb','');
$jfcamera_slide_10_caption_title		= $params->get('jfcamera_slide_10_caption_title','');
$jfcamera_slide_10_caption_descr		= $params->get('jfcamera_slide_10_caption_descr','');
$jfcamera_slide_10_caption_btn_text		= $params->get('jfcamera_slide_10_caption_btn_text','');
$jfcamera_slide_10_caption_btn_link		= $params->get('jfcamera_slide_10_caption_btn_link','');
$jfcamera_slide_10_caption_btn_target 	= $params->get('jfcamera_slide_10_caption_btn_target','');
$jfcamera_slide_10_caption_effect		= $params->get('jfcamera_slide_10_caption_effect','');
$jfcamera_slide_10_caption_posT			= $params->get('jfcamera_slide_10_caption_posT','');
$jfcamera_slide_10_caption_posL			= $params->get('jfcamera_slide_10_caption_posL','');
$jfcamera_slide_10_caption_posB			= $params->get('jfcamera_slide_10_caption_posB','');
$jfcamera_slide_10_caption_posR			= $params->get('jfcamera_slide_10_caption_posR','');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_jfcameraslider', $params->get('layout', 'default'));