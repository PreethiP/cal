<?php
/**
 * JF JS LatestPhotos
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
class modJFJSLatestPhotoshelper {
	function getJFLatestPhotos( &$params ) {
			$user	=& JFactory::getUser();
			$my_id = $user->id; 	
			error_reporting(E_ALL & ~E_NOTICE);
			$list = array();			
			$query = " SELECT z.type as album_type,z.id as albumid_x,z.groupid as album_groupid,x.thumbnail as photo_thumbnail,x.caption as photo_title,x.albumid as photo_album,x.creator as photo_creatorid,x.id as photo_id,x.image as photo_image,x.hits as photo_views,y.username as username,y.id as user_id"." FROM #__community_photos_albums AS z "." LEFT JOIN #__users AS y ON z.creator=y.id "." LEFT JOIN #__community_photos AS x ON z.id=x.albumid "." WHERE x.published=1 ";
			if ($params->get( 'albumid' )!="") {
				$query .= " AND z.id=-1 ";
				$checkalbumIDs = $params->get( 'albumid' );
				$albums = explode(",", $checkalbumIDs);
				$albumNumber = count($albums);
				foreach ($albums as $album) {
					$query .= "OR z.id='". $album . "' ";
				}
			}
			if ($params->get('permission')=='2') {
				$query .= "AND x.permissions LIKE '%' ";
			}
			if ($params->get('permission')=='1') {
				if ($my_id==0) {
					$query .= "AND x.permissions=0 ";
				}
				if ($my_id!=0) {
					$query .= "AND (x.permissions=0 OR x.permissions=20) ";
				}
			}
			$query .= " ORDER BY x.created DESC "." LIMIT " . $params->get('pool_count');				
			$db =& JFactory::getDBO();
			$db->setQuery( $query );		
			$photorows = $db->loadObjectList();
			if ($params->get('shuffle')==1) {
				shuffle($photorows);	
			}
			if ($photorows!=null){
				$i=0;
				foreach ($photorows as $singlerow) {				
					$list["allphotos"][$i]["photo_album"]=$singlerow->photo_album;
					$list["allphotos"][$i]["photo_id"]=$singlerow->photo_id;
					$list["allphotos"][$i]["album_type"]=$singlerow->album_type;
					$list["allphotos"][$i]["photo_title"]=$singlerow->photo_title;
					$list["allphotos"][$i]["photo_image"]=$singlerow->photo_image;
					$list["allphotos"][$i]["photo_thumbnail"]=$singlerow->photo_thumbnail;
					$list["allphotos"][$i]["photo_views"]=$singlerow->photo_views;
					$list["allphotos"][$i]["username"]=$singlerow->username;
					$list["allphotos"][$i]["album_groupid"]=$singlerow->album_groupid;
					$i++;		
				}
				return $list;
			}
	}
}