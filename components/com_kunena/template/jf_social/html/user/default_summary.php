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

$private = KunenaFactory::getPrivateMessaging();
if ($this->me->userid == $this->user->id) {
	$PMCount = $private->getUnreadCount($this->me->userid);
	$PMlink = $private->getInboxLink($PMCount ? JText::sprintf('COM_KUNENA_PMS_INBOX_NEW', $PMCount) : JText::_('COM_KUNENA_PMS_INBOX'));
} else {
	$PMlink = $this->profile->profileIcon('private');
}
?>
<?php if ($this->avatarlink) : ?>
<div class="kavatar-lg">
	<?php echo $this->avatarlink; ?>
	<ul class="jfku_prof_stat">
		<?php if ( !empty($this->banReason) ) : ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_BANINFO'); ?>:</strong> <?php echo $this->escape($this->banReason); ?></li><?php endif ?>
		<li><span class="kicon-button kbuttononline-<?php echo $this->profile->isOnline('yes', 'no') ?>"><span class="online-<?php echo $this->profile->isOnline('yes', 'no') ?>"><span><?php echo $this->profile->isOnline(JText::_('COM_KUNENA_ONLINE'), JText::_('COM_KUNENA_OFFLINE')); ?></span></span></span></li>
		<?php if (!empty($this->usertype)): ?><li class="usertype"><?php echo $this->escape($this->usertype); ?></li><?php endif; ?>
		<?php if (!empty($this->rank_title)): ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_RANK'); ?>: </strong><?php echo $this->escape($this->rank_title); ?></li><?php endif; ?>
		<?php if (!empty($this->rank_image)): ?><li class="kprofile-rank"><?php echo $this->rank_image; ?></li><?php endif; ?>
	</ul>
</div>
<?php endif; ?>
<div id="kprofile-stats" class="jf">
<ul>
	<?php if (!empty($this->registerdate)): ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_REGISTERDATE'); ?>:</strong> <span class="jfku_prof_info_span jf_ku_tipsy_w_arial" title="<?php echo KunenaDate::getInstance($this->registerdate)->toKunena('ago'); ?>"><?php echo KunenaDate::getInstance($this->registerdate)->toKunena('date_today', 'utc'); ?></span></li><?php endif; ?>
	<?php if (!empty($this->lastvisitdate)): ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_LASTVISITDATE'); ?>:</strong> <span class="jfku_prof_info_span jf_ku_tipsy_w_arial" title="<?php echo KunenaDate::getInstance($this->lastvisitdate)->toKunena('ago'); ?>"><?php echo KunenaDate::getInstance($this->lastvisitdate)->toKunena('date_today', 'utc'); ?></span></li><?php endif; ?>
	<li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_TIMEZONE'); ?>:</strong> <span class="jfku_prof_info_span">GMT <?php echo $this->localtime->toTimezone(); ?></span></li>
	<li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_LOCAL_TIME'); ?>:</strong> <span class="jfku_prof_info_span"><?php echo $this->localtime->toKunena('time'); ?></span></li>
	<?php if (!empty($this->posts)): ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_POSTS'); ?>:</strong> <span class="jfku_prof_info_span"><?php echo intval($this->posts); ?></span></li><?php endif; ?>
	<?php if (!empty($this->thankyou)): ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_THANKYOU_RECEIVED'); ?></strong> <span class="jfku_prof_info_span"><?php echo intval($this->thankyou); ?></span></li><?php endif; ?>
	<?php if (!empty($this->userpoints)): ?><li><strong><?php echo JText::_('COM_KUNENA_AUP_POINTS'); ?></strong> <span class="jfku_prof_info_span"><?php echo intval($this->userpoints); ?></span></li><?php endif; ?>
	<?php if (!empty($this->usermedals)) : ?><li><?php foreach ( $this->usermedals as $medal ) : echo $medal,' '; endforeach ?></li><?php endif ?>
	<li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_PROFILEVIEW'); ?>:</strong> <span class="jfku_prof_info_span"><?php echo intval($this->profile->uhits); ?></span></li>
	<li><?php echo $this->displayKarma(); ?></li>
	<?php if ($PMlink) : ?>
	<li><?php if( $this->me->userid != $this->user->id): ?><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_SEND_MESSAGE'); ?>:</strong> <?php  endif ?><span class="jfku_prof_info_span"><?php echo $PMlink; ?></span></li>
	<?php  endif ?>
	<?php if( !empty($this->personalText) ) { ?><li><strong><?php echo JText::_('COM_KUNENA_MYPROFILE_ABOUTME'); ?>:</strong> <span class="jfku_prof_info_span"><?php echo KunenaHtmlParser::parseText($this->personalText); ?></span></li><?php } ?>
</ul>
</div>
