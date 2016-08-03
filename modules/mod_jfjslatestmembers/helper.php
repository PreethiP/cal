<?php
/**
 * JF JS LatestMembers
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
 */
defined('_JEXEC') or die('Restricted access');
	if(!function_exists('getJFJSLatestMember')){
		function getJFJSLatestMember($limit = 15, $jfupdatedavatars){
			$db	 =& JFactory::getDBO();
			
			if($jfupdatedavatars){
				$condition  = 'AND b.'.$db->nameQuote('avatar').' != '.$db->Quote('components/com_community/assets/default.jpg').' ';
				$condition .= 'AND b.'.$db->nameQuote('avatar').' != \'\' '; 
			}
			else{
				$condition = ' ';
			}
			$config		= CFactory::getConfig();
			if(!$config->get('privacy_show_admins')){
				$userModel		= CFactory::getModel('User');
				$tmpAdmins		= $userModel->getSuperAdmins();

				$admins         = array();
				
				$condition  .= ' AND '.$db->nameQuote('id').' NOT IN(';
				for($i = 0;$i < count($tmpAdmins);$i++){
					$admin  = $tmpAdmins[$i];
					$condition  .= $db->Quote($admin->id);
					$condition  .= $i < count($tmpAdmins) - 1 ? ',' : '';
				}
				$condition  .= ')';
			}
			
			$query	= 'SELECT * FROM '.$db->nameQuote('#__users').' AS a ' 
					. 'INNER JOIN '.$db->nameQuote('#__community_users').' AS b ON a.'.$db->nameQuote('id').' = b.'.$db->nameQuote('userid').' '
					. 'WHERE a.'.$db->nameQuote('block').' = '.$db->Quote(0).' '
					. $condition
					. 'ORDER BY a.'.$db->nameQuote('registerDate').' '
					. 'DESC LIMIT '.$limit;
			$db->setQuery($query);
			
			$result = $db->loadObjectList();
			if($db->getErrorNum()){
				JError::raiseError(500,$db->stderr());
			}
			return $result;
		}
	}
?>
