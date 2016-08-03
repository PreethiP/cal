<?php
/**
 * @version		$Id: tag.php 1618 2012-09-21 11:23:08Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>

<!-- Start K2 Tag Layout -->
<div id="k2Container" class="jf-k2-tagView jf-k2-layout2 tagView<?php if($this->params->get('pageclass_sfx')) echo ' '.$this->params->get('pageclass_sfx'); ?>">

	<?php if($this->params->get('show_page_title')): ?>
		<!-- Page title -->
		<div class="componentheading<?php echo $this->params->get('pageclass_sfx')?>">
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</div>
	<?php endif; ?>

	<?php if($this->params->get('tagFeedIcon',1)): ?>
		<!-- RSS feed icon -->
		<div class="k2FeedIcon">
			<a href="<?php echo $this->feed; ?>" title="<?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?>">
				<span><?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?></span>
			</a>
			<div class="clr"></div>
		</div>
	<?php endif; ?>

	<?php if(count($this->items)): ?>
	<div class="tagItemList">
		<?php foreach($this->items as $item): ?>

		<!-- Start K2 Item Layout -->
		<div class="tagItemView">

			<div class="tagItemHeader jf-k2-ItemHeader">
			  <?php if($item->params->get('tagItemTitle',1)): ?>
				  <!-- Item title -->
				  <h2 class="tagItemTitle jf-k2-ItemTitle">
					<?php if ($item->params->get('tagItemTitleLinked',1)): ?>
						<a href="<?php echo $item->link; ?>">
						<?php echo $item->title; ?>
					</a>
					<?php else: ?>
					<?php echo $item->title; ?>
					<?php endif; ?>
				  </h2>
			  <?php endif; ?>
		  </div>

		  <div class="tagItemBody">
			  <?php if($item->params->get('tagItemImage',1) && !empty($item->imageGeneric)): ?>
				  <!-- Item Image -->
				  <div class="tagItemImageBlock jf-k2-item-image-block">
					<span class="tagItemImage jf-k2-catItemImage">
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
							<?php if($item->params->get('tagItemDateCreated',1)): ?>
								<!-- Date created -->
								<span class="catItemDateCreated">
									<?php echo JHTML::_('date', $item->created , JText::_('JF_K2_STYLE1_DATE_FORMAT_LC3_PART1')); ?><br />
									<?php echo JHTML::_('date', $item->created , JText::_('JF_K2_STYLE1_DATE_FORMAT_LC3_PART2')); ?>
								</span>
							<?php endif; ?>
						</div>
						<div class="jf-k2-item-category">
							<?php if($item->params->get('tagItemCategory')): ?>
								<!-- Item category name -->
								<div class="tagItemCategory jf-k2-catItemCategory">
									<?php echo JText::_('K2_PUBLISHED_IN'); ?>:
									<a href="<?php echo $item->category->link; ?>"><?php echo $item->category->name; ?></a>
								</div>
							<?php endif; ?>
						</div>
						
						
					</span>
					<div class="clr"></div>
				  </div>
			  <?php endif; ?>
			  
			  <?php if($item->params->get('tagItemIntroText',1)): ?>
				  <!-- Item introtext -->
				  <div class="tagItemIntroText jf-k2-catItemIntroText">
					<?php echo $item->introtext; ?>
				  </div>
			  <?php endif; ?>

			  <div class="clr"></div>
		  </div>
		  
		  <div class="clr"></div>
		  
			<?php if($item->params->get('tagItemExtraFields',0) && count($item->extra_fields)): ?>
				<!-- Item extra fields -->  
				<div class="tagItemExtraFields">
					<h4><?php echo JText::_('K2_ADDITIONAL_INFO'); ?></h4>
					<ul>
						<?php foreach ($item->extra_fields as $key=>$extraField): ?>
						<?php if($extraField->value): ?>
						<li class="<?php echo ($key%2) ? "odd" : "even"; ?> type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?>">
							<span class="tagItemExtraFieldsLabel"><?php echo $extraField->name; ?></span>
							<span class="tagItemExtraFieldsValue"><?php echo $extraField->value; ?></span>		
						</li>
						<?php endif; ?>
						<?php endforeach; ?>
						</ul>
					<div class="clr"></div>
				  </div>
			<?php endif; ?>
		  
			
			
			<?php if ($item->params->get('tagItemReadMore')): ?>
				<!-- Item "read more..." link -->
				<div class="tagItemReadMore jf-k2-ItemReadMore">
					<a class="k2ReadMore" href="<?php echo $item->link; ?>">
						<?php echo JText::_('K2_READ_MORE'); ?>
					</a>
				</div>
			<?php endif; ?>

			<div class="clr"></div>
		</div>
		<!-- End K2 Item Layout -->
		
		<?php endforeach; ?>
	</div>

	<!-- Pagination -->
	<?php if($this->pagination->getPagesLinks()): ?>
		<div class="k2Pagination">
			<?php echo $this->pagination->getPagesLinks(); ?>
			<div class="clr"></div>
			<?php echo $this->pagination->getPagesCounter(); ?>
		</div>
	<?php endif; ?>

	<?php endif; ?>
	
</div>
<!-- End K2 Tag Layout -->
