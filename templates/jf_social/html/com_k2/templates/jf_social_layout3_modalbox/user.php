<?php
/**
 * @version		$Id: user.php 1618 2012-09-21 11:23:08Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

// Get user stuff (do not change)
$user = JFactory::getUser();

?>

<!-- Start K2 User Layout -->

<div id="k2Container" class="jf-k2-userView jf-k2-layout3 userView<?php if($this->params->get('pageclass_sfx')) echo ' '.$this->params->get('pageclass_sfx'); ?>">

	<?php if($this->params->get('show_page_title') && $this->params->get('page_title')!=$this->user->name): ?>
		<!-- Page title -->
		<div class="componentheading<?php echo $this->params->get('pageclass_sfx')?>">
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</div>
	<?php endif; ?>

	<?php if($this->params->get('userFeedIcon',1)): ?>
		<!-- RSS feed icon -->
		<div class="k2FeedIcon">
			<a href="<?php echo $this->feed; ?>" title="<?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?>">
				<span><?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?></span>
			</a>
			<div class="clr"></div>
		</div>
	<?php endif; ?>

	<?php if ($this->params->get('userImage') || $this->params->get('userName') || $this->params->get('userDescription') || $this->params->get('userURL') || $this->params->get('userEmail')): ?>
	<div class="userBlock jf-k2-userBlock">
	
		<?php if(isset($this->addLink) && JRequest::getInt('id')==$user->id): ?>
			<!-- Item add link -->
			<span class="userItemAddLink">
				<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->addLink; ?>">
					<?php echo JText::_('K2_POST_A_NEW_ITEM'); ?>
				</a>
			</span>
		<?php endif; ?>
	
		<?php if ($this->params->get('userImage') && !empty($this->user->avatar)): ?>
			<img src="<?php echo $this->user->avatar; ?>" alt="<?php echo $this->user->name; ?>" style="width:<?php echo $this->params->get('userImageWidth'); ?>px; height:auto;" />
		<?php endif; ?>
		
		<?php if ($this->params->get('userName')): ?>
			<h2><?php echo $this->user->name; ?></h2>
		<?php endif; ?>
		
		<?php if ($this->params->get('userDescription') && trim($this->user->profile->description)): ?>
			<div class="userDescription"><?php echo $this->user->profile->description; ?></div>
		<?php endif; ?>
		
		<?php if (($this->params->get('userURL') && isset($this->user->profile->url) && $this->user->profile->url) || $this->params->get('userEmail')): ?>
			<div class="userAdditionalInfo">
				<?php if ($this->params->get('userURL') && isset($this->user->profile->url) && $this->user->profile->url): ?>
					<span class="userURL">
						<?php echo JText::_('K2_WEBSITE_URL'); ?>: <a href="<?php echo $this->user->profile->url; ?>" target="_blank" rel="me"><?php echo $this->user->profile->url; ?></a>
					</span>
				<?php endif; ?>

				<?php if ($this->params->get('userEmail')): ?>
					<span class="userEmail">
						<?php echo JText::_('K2_EMAIL'); ?>: <?php echo JHTML::_('Email.cloak', $this->user->email); ?>
					</span>
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<div class="clr"></div>
		
		<?php echo $this->user->event->K2UserDisplay; ?>
		
		<div class="clr"></div>
	</div>
	<?php endif; ?>



	<?php if(count($this->items)): ?>
	<!-- Item list -->
	<div class="userItemList">
		<?php foreach ($this->items as $item): ?>
		
		<!-- Start K2 Item Layout -->
		<div class="userItemView<?php if(!$item->published || ($item->publish_up != $this->nullDate && $item->publish_up > $this->now) || ($item->publish_down != $this->nullDate && $item->publish_down < $this->now)) echo ' userItemViewUnpublished'; ?><?php echo ($item->featured) ? ' userItemIsFeatured' : ''; ?>">
		
			<!-- Plugins: BeforeDisplay -->
			<?php echo $item->event->BeforeDisplay; ?>
			
			<!-- K2 Plugins: K2BeforeDisplay -->
			<?php echo $item->event->K2BeforeDisplay; ?>
		
			<div class="userItemHeader jf-k2-ItemHeader">			
				<?php if($this->params->get('userItemTitle')): ?>
					<!-- Item title -->
					<h3 class="userItemTitle jf-k2-ItemTitle">
						<?php if(isset($item->editLink)): ?>
							<!-- Item edit link -->
							<span class="userItemEditLink">
								<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $item->editLink; ?>">
									<?php echo JText::_('K2_EDIT_ITEM'); ?>
								</a>
							</span>
						<?php endif; ?>

						<?php if ($this->params->get('userItemTitleLinked') && $item->published): ?>
							<a href="<?php echo $item->link; ?>">
								<?php echo $item->title; ?>
							</a>
						<?php else: ?>
							<?php echo $item->title; ?>
						<?php endif; ?>
						<?php if(!$item->published || ($item->publish_up != $this->nullDate && $item->publish_up > $this->now) || ($item->publish_down != $this->nullDate && $item->publish_down < $this->now)): ?>
							<span>
								<sup>
									<?php echo JText::_('K2_UNPUBLISHED'); ?>
								</sup>
							</span>
						<?php endif; ?>
					</h3>
				<?php endif; ?>
		  </div>
		
		  <!-- Plugins: AfterDisplayTitle -->
		  <?php echo $item->event->AfterDisplayTitle; ?>
		  
		  <!-- K2 Plugins: K2AfterDisplayTitle -->
		  <?php echo $item->event->K2AfterDisplayTitle; ?>

		  <div class="userItemBody">
		
			  <!-- Plugins: BeforeDisplayContent -->
			  <?php echo $item->event->BeforeDisplayContent; ?>
			  
			  <!-- K2 Plugins: K2BeforeDisplayContent -->
			  <?php echo $item->event->K2BeforeDisplayContent; ?>
		
			  <?php if($this->params->get('userItemImage') && !empty($item->imageGeneric)): ?>
				<!-- Item Image -->
				<div class="userItemImageBlock jf-k2-item-image-block">
					<span class="userItemImage jf-k2-catItemImage">
						<div class="jf-k2-item-image">
							<img src="<?php echo $item->imageLarge; ?>" alt="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>" style="width:<?php echo $item->params->get('itemImageGeneric'); ?>px; height:auto;" />
						</div>
						<div class="jf-k2-item-zoom-sec">
							<div class="jf-k2-item-zoom-block">
								<div class="jf-k2-item-zoom">
									<a class="modal" rel="{handler: 'image'}" href="<?php echo $item->item->imageXLarge; ?>"></a>
								</div>
							</div>
						</div>
						<div class="jf-k2-item-date">
							<?php if($this->params->get('userItemDateCreated')): ?>
								<!-- Date created -->
								<span class="catItemDateCreated">
									<?php echo JHTML::_('date', $item->created , JText::_('JF_K2_STYLE1_DATE_FORMAT_LC3_PART1')); ?><br />
									<?php echo JHTML::_('date', $item->created , JText::_('JF_K2_STYLE1_DATE_FORMAT_LC3_PART2')); ?>
								</span>
							<?php endif; ?>
						</div>
						<div class="jf-k2-item-category">
							<?php if($this->params->get('userItemCategory')): ?>
								<!-- Item category name -->
								<div class="userItemCategory jf-k2-catItemCategory">
									<span><?php echo JText::_('K2_PUBLISHED_IN'); ?>:</span>
									<a href="<?php echo $item->category->link; ?>"><?php echo $item->category->name; ?></a>
								</div>
							<?php endif; ?>
						</div>
						
						
						
					</span>
					<div class="clr"></div>
				</div>
			  <?php endif; ?>
			  
			  <?php if($this->params->get('userItemIntroText')): ?>
				  <!-- Item introtext -->
				  <div class="userItemIntroText jf-k2-catItemIntroText">
					<?php echo $item->introtext; ?>
				  </div>
			  <?php endif; ?>
		
				<div class="clr"></div>

			  <!-- Plugins: AfterDisplayContent -->
			  <?php echo $item->event->AfterDisplayContent; ?>
			  
			  <!-- K2 Plugins: K2AfterDisplayContent -->
			  <?php echo $item->event->K2AfterDisplayContent; ?>
		
			  <div class="clr"></div>
		  </div>
		
		  <?php if($this->params->get('userItemCategory') || $this->params->get('userItemTags')): ?>
		  <div class="userItemLinks jf-k2-ItemLinks">
			<?php if($this->params->get('userItemTags') && isset($item->tags)): ?>
				<!-- Item tags -->
				<div class="userItemTagsBlock jf-k2-TagsBlock jf-tipsy-e" title="<?php echo JText::_('K2_TAGGED_UNDER'); ?>">
					<span class="jf-k2-TagsBlock-span"></span>
					<ul class="userItemTags">
						<?php foreach ($item->tags as $tag): ?>
							<li><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></li>
						<?php endforeach; ?>
					</ul>
					<div class="clr"></div>
				</div>
			<?php endif; ?>

			<div class="clr"></div>
		  </div>
		  <?php endif; ?>  
		
			<div class="clr"></div>

			<?php if($this->params->get('userItemCommentsAnchor') && ( ($this->params->get('comments') == '2' && !$this->user->guest) || ($this->params->get('comments') == '1')) ): ?>
			<!-- Anchor link to comments below -->
			<div class="userItemCommentsLink jf-k2-ItemCommentsLink">
				<?php if(!empty($item->event->K2CommentsCounter)): ?>
					<!-- K2 Plugins: K2CommentsCounter -->
					<?php echo $item->event->K2CommentsCounter; ?>
				<?php else: ?>
					<?php if($item->numOfComments > 0): ?>
					<a href="<?php echo $item->link; ?>#itemCommentsAnchor">
						<?php echo $item->numOfComments; ?> <?php echo ($item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
					</a>
					<?php else: ?>
					<a href="<?php echo $item->link; ?>#itemCommentsAnchor">
						<?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
					</a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		  
			<?php if ($this->params->get('userItemReadMore')): ?>
			<!-- Item "read more..." link -->
			<div class="userItemReadMore jf-k2-ItemReadMore">
				<a class="k2ReadMore" href="<?php echo $item->link; ?>">
					<?php echo JText::_('K2_READ_MORE'); ?>
				</a>
			</div>
			<?php endif; ?>
			
			<div class="clr"></div>

		  <!-- Plugins: AfterDisplay -->
		  <?php echo $item->event->AfterDisplay; ?>
		  
		  <!-- K2 Plugins: K2AfterDisplay -->
		  <?php echo $item->event->K2AfterDisplay; ?>
			
			<div class="clr"></div>
		</div>
		<!-- End K2 Item Layout -->
		
		<?php endforeach; ?>
	</div>

	<!-- Pagination -->
	<?php if(count($this->pagination->getPagesLinks())): ?>
	<div class="k2Pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<div class="clr"></div>
		<?php echo $this->pagination->getPagesCounter(); ?>
	</div>
	<?php endif; ?>
	
	<?php endif; ?>

</div>

<!-- End K2 User Layout -->