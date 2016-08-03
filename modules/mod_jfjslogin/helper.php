<?php
/**
 * JF JS Login
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
defined('_JEXEC') or die('Restricted access');

if(!class_exists('modJFJSLoginHelper')){
	class modJFJSLoginHelper{
		function getType(){
			$user = & JFactory::getUser();
			return (!$user->get('guest')) ? 'logout' : 'login';
		}
		function getReturnURL($params, $type){
			if($itemid =  $params->get($type)){
				$menu =& JSite::getMenu();
				$item = $menu->getItem($itemid);
				$url = JRoute::_($item->link.'&Itemid='.$itemid, false);
			}
			else{
				$url = JURI::base(true);
			}
			return base64_encode($url);
		}
	}
}