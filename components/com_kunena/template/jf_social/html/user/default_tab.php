<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage User
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

JHTML::_('behavior.calendar');
JHTML::_('behavior.tooltip');
?>

<div id="kprofile-tabs">
	<?php if($this->showUserPosts) : ?>
		<a href="#jfku_UserPosts" role="button" class="jf_ku_modalbtn btn jfku_UserPosts_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_USERPOSTS'); ?></a>
		<div id="jfku_UserPosts" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_USERPOSTS'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayUserPosts(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif; ?>
	
	<?php if ($this->showSubscriptions) :?>
		<a href="#jfku_Subscriptions" role="button" class="jf_ku_modalbtn btn jfku_Subscriptions_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_SUBSCRIPTIONS'); ?></a>
		<div id="jfku_Subscriptions" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_SUBSCRIPTIONS'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayCategoriesSubscriptions(); ?>
				<?php $this->displaySubscriptions(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif; ?>
	
	<?php if ($this->showFavorites) : ?>
		<a href="#jfku_Favorites" role="button" class="jf_ku_modalbtn btn jfku_Favorites_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_FAVORITES'); ?></a>
		<div id="jfku_Favorites" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_FAVORITES'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayFavorites(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif; ?>
	
	<?php if($this->showThankyou) : ?>
		<a href="#jfku_Thankyou" role="button" class="jf_ku_modalbtn btn jfku_Thankyou_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_THANK_YOU'); ?></a>
		<div id="jfku_Thankyou" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_THANK_YOU'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayGotThankyou(); ?>
				<?php $this->displaySaidThankyou(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif; ?>
	
	<?php if ($this->showUnapprovedPosts): ?>
		<a href="#jfku_UnapprovedPosts" role="button" class="jf_ku_modalbtn btn jfku_UnapprovedPosts_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_MESSAGE_ADMINISTRATION'); ?></a>
		<div id="jfku_UnapprovedPosts" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_MESSAGE_ADMINISTRATION'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayUnapprovedPosts(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif; ?>
	
	<?php if ($this->showAttachments): ?>
		<a href="#jfku_Attachments" role="button" class="jf_ku_modalbtn btn jfku_Attachments_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_MANAGE_ATTACHMENTS'); ?></a>
		<div id="jfku_Attachments" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_MANAGE_ATTACHMENTS'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayAttachments(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif;?>
	
	<?php if ($this->showBanManager): ?>
		<a href="#jfku_BanManager" role="button" class="jf_ku_modalbtn btn jfku_BanManager_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_BAN_BANMANAGER'); ?></a>
		<div id="jfku_BanManager" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_BAN_BANMANAGER'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayBanManager(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif;?>
	
	<?php if ($this->showBanHistory):?>
		<a href="#jfku_BanHistory" role="button" class="jf_ku_modalbtn btn jfku_BanHistory_img" data-toggle="modal"><?php echo JText::_('COM_KUNENA_BAN_BANHISTORY'); ?></a>
		<div id="jfku_BanHistory" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_BAN_BANHISTORY'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayBanHistory(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif;?>
	
	<?php if ($this->showBanUser) : ?>
		<a href="#jfku_BanUser" role="button" class="jf_ku_modalbtn btn jfku_BanUser_img" data-toggle="modal"><?php echo $this->banInfo->id ? JText::_('COM_KUNENA_BAN_EDIT') : JText::_('COM_KUNENA_BAN_NEW' ); ?></a>
		<div id="jfku_BanUser" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo $this->banInfo->id ? JText::_('COM_KUNENA_BAN_EDIT') : JText::_('COM_KUNENA_BAN_NEW' ); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayBanUser(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
	<?php endif; ?>
</div>

<div class="clrline"></div>

<div id="kprofile-rightcoltop">
	<div class="kprofile-rightcol2">
<?php
	$this->displayTemplateFile('user', 'default', 'social');
?>
	</div>
	<div class="kprofile-rightcol1">
		<ul>
			<li><span class="kicon-profile kicon-profile-location"></span><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_LOCATION'); ?>:</strong> <?php echo $this->locationlink; ?></li>
			<!--  The gender determines the suffix on the span class- gender-male & gender-female  -->
			<li><span class="kicon-profile kicon-profile-gender-<?php echo $this->genderclass; ?>"></span><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_GENDER'); ?>:</strong> <?php echo $this->gender; ?></li>
			<li class="bd"><span class="kicon-profile kicon-profile-birthdate"></span><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_BIRTHDATE'); ?>:</strong> <span title="<?php echo KunenaDate::getInstance($this->profile->birthdate)->toKunena('ago', 0); ?>"><?php echo KunenaDate::getInstance($this->profile->birthdate)->toKunena('date', 0); ?></span>
			<!--  <a href="#" title=""><span class="bday-remind"></span></a> -->
			</li>
		</ul>
	</div>
</div>

<div class="clrline"></div>
<div id="kprofile-rightcolbot">
	<div class="kprofile-rightcol2">
		<ul>
			<?php if ( $this->email ): ?><li><span class="kicon-profile kicon-profile-email"></span><?php echo $this->email ?></li><?php endif; ?>
			<?php // FIXME: we need a better way to add http/https ?>
			<li><?php if (!empty($this->profile->websiteurl)):?><span class="kicon-profile kicon-profile-website"></span><?php endif;?><a href="http://<?php echo $this->escape($this->profile->websiteurl); ?>" target="_blank"><?php echo KunenaHtmlParser::parseText($this->profile->websitename); ?></a></li>
		</ul>
	</div>
	<div class="kprofile-rightcol1">
		<h4><?php echo JText::_('COM_KUNENA_MYPROFILE_SIGNATURE'); ?></h4>
		<div class="kmsgsignature"><div><?php echo $this->signatureHtml ?></div></div>
	</div>

</div>

<div class="clrline"></div>