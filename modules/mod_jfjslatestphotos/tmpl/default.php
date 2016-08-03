<?php
/**
 * JF JS LatestPhotos
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.modal');
$config=new JConfig();
?>

<div id="jf-js-latest-photos" class="moduletable<?php echo $params->get( 'moduleclass_sfx' ) ?>">
	<div class="jf-js-latest-photos-button-cont">
		<div id="jf-js-latest-photos-button"><span><?php echo JText::_('MOD_JF_JS_MLP_LATEST_PHOTOS'); ?></span></div>
	</div>
	<div class="jf-js-latest-photos-cont">
	
		<div id="jf-js-latest-photos-scroller" class="jf-js-latest-photos-mainscroller">
			<div class="jf-js-latest-photos-mainscroller-cont">
				
				<ul class="jf-js-latest-photos-mainscroller-ul">
					<?php 
						error_reporting(E_ALL & ~E_NOTICE);
						if ( sizeof($list["allphotos"])>$params->get( 'photo_count' ) ) { 
						for ($i=0;$i< $params->get( 'photo_count' ); $i++) { 
							$jfalbumid			= $list["allphotos"][$i]["photo_album"];
							$jfphotoid			= $list["allphotos"][$i]["photo_id"];
							$jfphoto			= $list["allphotos"][$i]["photo_image"];
							$jfphotothumb		= $list["allphotos"][$i]["photo_thumbnail"];
							$jfphototitle		= $list["allphotos"][$i]["photo_title"];
							$jfphotohits		= $list["allphotos"][$i]["photo_views"];
							$jfphotoauthor		= $list["allphotos"][$i]["username"];
							$jfphotosfrom		= $list["allphotos"][$i]["album_type"];
							$jfgroupid			= $list["allphotos"][$i]["album_groupid"];
					?>
							<li>
								<a class="pirobox_gall jf-js-latest-photos-image jf-tipsy-s" rel="gallery" title="<?php echo $jfphototitle; ?>" href="<?php echo $jfphoto;?>">
									<img src="<?php echo $jfphotothumb;?>" width="110" height="100" alt="<?php echo $jfphototitle; ?>" />
									<div class="jf-js-latest-photos-hovericon"><?php echo JText::_('MOD_JF_JS_MLP_ZOOM'); ?></div>
								</a>
								
								<div class="jf-js-latest-photos-infobutton"></div>
								<div class="jf-js-latest-photos-info">
									<ul>
										<li class="jf-js-latest-photos-views">
											<?php echo $jfphotohits;?>
										</li>
										<li class="jf-js-latest-photos-readmore">
											<?php if ($jfphotosfrom=='user') { ?>
												<a href="<?php echo CRoute::_('index.php?option=com_community&view=photos&userid='.$jfphotoauthor.'&task=photo&albumid='.$jfalbumid.'#photoid='.$jfphotoid) ?>">
											<?php } ?>
											<?php if ($jfphotosfrom=='group') { ?>
												<a href="<?php echo CRoute::_('index.php?option=com_community&view=photos&task=photo&albumid='.$jfalbumid.'&groupid='.$jfgroupid.'#photoid='.$jfphotoid) ?>" rel="nofollow">
											<?php } ?>
											Read More
												</a>
										</li>
										<li class="jf-js-latest-photos-author">
											<a href="<?php echo CRoute::_('index.php?option=com_community&userid='.$jfphotoauthor); ?>">
												<?php echo $jfphotoauthor;?>
											</a>
										</li>
									</ul>
								</div>

							</li>
					 <?php } 
					 } ?>
					 
					<?php // Photos are less than photo_count
						error_reporting(E_ALL & ~E_NOTICE);
						if ( $params->get( 'photo_count' )>=sizeof($list["allphotos"]) ) { 
						for ($i=0;$i< sizeof($list["allphotos"]); $i++) { 
							$jfalbumid			= $list["allphotos"][$i]["photo_album"];
							$jfphotoid			= $list["allphotos"][$i]["photo_id"];
							$jfphoto			= $list["allphotos"][$i]["photo_image"];
							$jfphotothumb		= $list["allphotos"][$i]["photo_thumbnail"];
							$jfphototitle		= $list["allphotos"][$i]["photo_title"];
							$jfphotohits		= $list["allphotos"][$i]["photo_views"];
							$jfphotoauthor		= $list["allphotos"][$i]["username"];
							$jfphotosfrom		= $list["allphotos"][$i]["album_type"];
							$jfgroupid			= $list["allphotos"][$i]["album_groupid"];
					?>	
							<li>
							
							
								<a class="pirobox_gall jf-js-latest-photos-image jf-tipsy-s" rel="gallery" title="<?php echo $jfphototitle; ?>" href="<?php echo $jfphoto;?>">
									<img src="<?php echo $jfphotothumb;?>" width="110" height="100" alt="<?php echo $jfphototitle; ?>" />
									<div class="jf-js-latest-photos-hovericon"><?php echo JText::_('MOD_JF_JS_MLP_ZOOM'); ?></div>
								</a>
			
								
								<div class="jf-js-latest-photos-infobutton"></div>
								<div class="jf-js-latest-photos-info">
									<ul>
										<li class="jf-js-latest-photos-views">
											<?php echo $jfphotohits;?>
										</li>
										<li class="jf-js-latest-photos-readmore">
											<?php if ($jfphotosfrom=='user') { ?>
												<a href="<?php echo CRoute::_('index.php?option=com_community&view=photos&userid='.$jfphotoauthor.'&task=photo&albumid='.$jfalbumid.'#photoid='.$jfphotoid) ?>">
											<?php } ?>
											<?php if ($jfphotosfrom=='group') { ?>
												<a href="<?php echo CRoute::_('index.php?option=com_community&view=photos&task=photo&albumid='.$jfalbumid.'&groupid='.$jfgroupid.'#photoid='.$jfphotoid) ?>" rel="nofollow">
											<?php } ?>
											Read More
												</a>
										</li>
										<li class="jf-js-latest-photos-author">
											<a href="<?php echo CRoute::_('index.php?option=com_community&userid='.$jfphotoauthor); ?>">
												<?php echo $jfphotoauthor;?>
											</a>
										</li>
									</ul>
								</div>

							</li>
					 <?php } 
					 } ?>
					 
					<?php
						error_reporting(E_ALL & ~E_NOTICE);
						if ( sizeof($list["allphotos"])==0 ) { ?>
							<p><?php echo JText::_('No Photos found'); ?></p>
					<?php } ?>
					
				</ul>
				
			</div>
		</div>
		<div class="jf-js-latest-photos-show-all">
			<a href="<?php echo CRoute::_('index.php?option=com_community&view=photos' ); ?>" rel="nofollow">
				<span><?php echo JText::_('MOD_JF_JS_MLP_SHOW_ALL'); ?></span>
			</a>
		</div>
		
	</div>
	<div class="jf-js-latest-photos-loader"></div>
</div>