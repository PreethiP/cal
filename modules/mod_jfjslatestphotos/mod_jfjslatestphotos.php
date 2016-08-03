<?php
/**
 * JF JS LatestPhotos
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
require_once (dirname(__FILE__).DS.'helper.php');
require_once( JPATH_ROOT . DS . 'components' . DS . 'com_community' . DS . 'libraries' . DS . 'core.php' );
$list = modJFJSLatestPhotoshelper::getJFLatestPhotos($params);
require(JModuleHelper::getLayoutPath('mod_jfjslatestphotos'));

$document=& JFactory::getDocument();
$document->addStyleSheet( rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/css/style.jf-social-mlp.css' );

$mlp_PiroboxStyle			= $params->get('mlp_PiroboxStyle');
$mlp_PiroboxOverlayBG		= $params->get('mlp_PiroboxOverlayBG');
$mlp_PiroboxSpeed			= $params->get('mlp_PiroboxSpeed');
$mlp_PiroboxBGOpacity		= $params->get('mlp_PiroboxBGOpacity');
$mlp_PiroboxResize			= $params->get('mlp_PiroboxResize');
$mlp_PiroboxZoom			= $params->get('mlp_PiroboxZoom');
$mlp_PiroboxMove			= $params->get('mlp_PiroboxMove');
$mlp_PiroboxScroll			= $params->get('mlp_PiroboxScroll');
$mlp_PiroboxShare			= $params->get('mlp_PiroboxShare');

if ($params->get('mlp_loadjquery', '1')) {
	$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/jquery-1.8.0.min.js');
}
if ($params->get('mlp_loadjquery_noconflict', '1')) {
	$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/jquery.noconflict.js');
}

$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/jf_social-mlp.js');
$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/jquery-ui-1.8.13.custom.min-mlp.js');
$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/jquery.thumbnailScroller-mlp.js');
$document->addScriptDeclaration('(function($){window.onload=function(){$("#jf-js-latest-photos-scroller").thumbnailScroller({scrollerType:"hoverPrecise",scrollerOrientation:"horizontal",scrollSpeed:2,scrollEasing:"easeOutCirc",scrollEasingAmount:600,acceleration:4,scrollSpeed:800,noScrollCenterSpace:10,autoScrolling:1,autoScrollingSpeed:2000,autoScrollingEasing:"easeInOutQuad",autoScrollingDelay:500})}})(jQuery);');

if ($params->get('mlp_EnablePirobox', '1') == '1') {
	$document->addStyleSheet(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/pirobox/css_pirobox/'.$mlp_PiroboxStyle.'/style.css');
	$document->addStyleDeclaration(".piro_overlay{background:".$mlp_PiroboxOverlayBG."!important;");
	$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/pirobox/jquery_ui.min.js');
	$document->addScript(rtrim( JURI::root() , '/' ) . '/components/com_community/templates/jf_social_js_2.6/js/pirobox/pirobox_extended-1.3.js');
	$document->addScriptDeclaration('jQuery(document).ready(function($){$.pirobox_ext({attribute:"rel",piro_speed:'.$mlp_PiroboxSpeed.',bg_alpha:'.$mlp_PiroboxBGOpacity.',resize:'.$mlp_PiroboxResize.',zoom_mode:'.$mlp_PiroboxZoom.',move_mode:"'.$mlp_PiroboxMove.'",piro_scroll:'.$mlp_PiroboxScroll.',share:'.$mlp_PiroboxShare.'})});');
}