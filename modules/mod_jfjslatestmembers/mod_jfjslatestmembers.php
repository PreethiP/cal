<?php
/**
 * JF JS LatestMembers
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
 */
defined('_JEXEC') or die('Restricted access');

include_once(JPATH_ROOT.DS.'components'.DS.'com_community'.DS.'defines.community.php');
require_once(JPATH_ROOT.DS.'components'.DS.'com_community'.DS.'libraries'.DS.'core.php');
require_once(JPATH_ROOT.DS.'components'.DS.'com_community'.DS.'libraries'.DS.'tooltip.php');
require_once(JPATH_ROOT.DS.'components'.DS.'com_community'.DS.'helpers'.DS.'string.php');
require_once(dirname(__FILE__).DS.'helper.php');

CFactory::load('helpers','string');
CFactory::load('libraries','error');
JPlugin::loadLanguage('mod_jfjslatestmembers',JPATH_ROOT);
JPlugin::loadLanguage('com_community',JPATH_ROOT);

$doc =& JFactory::getDocument();
$doc->addStyleSheet(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/css/style.jf-social-mlm.css');

$jfusercount_lim 		= $params->get('jfusercount_lim',10);
$jfupdatedavatars		= $params->get('jfupdatedavatars',0);
$jfusertooltips 		= $params->get('jfusertooltips',1);
$jfautoslide 			= $params->get('jfautoslide',0);
$jfautoslidedur 		= $params->get('jfautoslidedur',3000);
$jfslideuserscount 		= $params->get('jfslideuserscount',6);

$config					= CFactory::getConfig();

$row = getJFJSLatestMember($jfusercount_lim,$jfupdatedavatars);

$CFactoryMethod = get_class_methods('CFactory');					
if(in_array('loadUsers', $CFactoryMethod)){
	$uids = array();
	foreach($row as $m){
		$uids[] = $m->id;
	}
	CFactory::loadUsers($uids);
}

$js	= '/assets/script-1.2';
if($params->get('loadjquery','1')){
	$doc->addScript(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/js/jquery-1.8.0.min.js');
}
if($params->get('loadjquery_noconflict','1')){
	$doc->addScript(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/js/jquery.noconflict.js');
}
if($params->get('loadjquery_easing','1')){
	$doc->addScript(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/js/jquery.easing.min.js');
}
$doc->addScript(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/js/jquery.bxSlider.min.js');
$doc->addScript(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/js/jf_social-mlm.js');

if($params->get('jfautoslide','0') == '0'){
	$doc->addScriptDeclaration('(function($){$.fn.jf_js_latestmembers=function(variables){var container=$(this);container.bxSlider({auto:false,pause:'.$jfautoslidedur.',nextText:null,prevText:null,mode:"horizontal",displaySlideQty:'.$jfslideuserscount.',infiniteLoop:true,hideControlOnEnd:false,easing:"easeInOutBack",wrapperClass:"jf-js-latestmembers"})}})(jQuery);');
}
if($params->get('jfautoslide','1') == '1'){
	$doc->addScriptDeclaration('(function($){$.fn.jf_js_latestmembers=function(variables){var container=$(this);container.bxSlider({auto:true,pause:'.$jfautoslidedur.',nextText:null,prevText:null,mode:"horizontal",displaySlideQty:'.$jfslideuserscount.',infiniteLoop:true,hideControlOnEnd:false,easing:"easeInOutBack",wrapperClass:"jf-js-latestmembers"})}})(jQuery);');
}

$js	.= ($config->get('usepackedjavascript')==1)?'.pack.js':'.js';
CAssets::attach($js,'js');

require(JModuleHelper::getLayoutPath('mod_jfjslatestmembers'));