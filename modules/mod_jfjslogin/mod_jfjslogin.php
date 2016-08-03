<?php
/**
 * JF JS Login
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).DS.'helper.php');
require_once(JPATH_BASE.DS.'components'.DS.'com_community'.DS.'libraries'.DS.'core.php');
CFactory::load('libraries','userpoints');
CFactory::load('libraries','window');
CFactory::load('helpers','owner');
CWindow::load();

$document	= JFactory::getDocument();

$config	= CFactory::getConfig();
$my		= CFactory::getUser();
$js		= 'assets/script-1.2';
$js		.= ($config->getBool('usepackedjavascript')) ? '.pack.js' : '.js';
CAssets::attach($js, 'js');

$document->addScript(rtrim(JURI::root(),'/').'/components/com_community/assets/ajaxfileupload.pack.js');
$document->addScript(rtrim(JURI::root(),'/').'/components/com_community/assets/imgareaselect/scripts/jquery.imgareaselect.pack.js');
$document->addStyleSheet(rtrim(JURI::root(),'/').'/components/com_community/assets/imgareaselect/css/imgareaselect-default.css');
$document->addStyleSheet(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/css/style.jf-social-mjl.css');
$document->addScript(rtrim(JURI::root(),'/').'/components/com_community/templates/jf_social_js_2.6/js/jf_social-mjl.js');
$document->addScriptDeclaration('joms.filters.bind();');

require(JModuleHelper::getLayoutPath('mod_jfjslogin'));