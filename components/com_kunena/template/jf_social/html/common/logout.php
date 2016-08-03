<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Common
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<div id="jf_ku_mobile_nav">

		<div id="jf_ku_mob_menu_expand_inner">
		
			<div class="jf_ku_mob_menu_expand_prof_sec">
				<div class="jf_ku_mob_avatar">
					<?php echo $this->me->getAvatarImage('kavatar', 'profile'); ?>
					<a class="jf_ku_mob_edit_prof" href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=user&layout=edit') ?>"></a>
					<?php if (!empty($this->privateMessagesLink)) : ?><div class="jf_ku_mob_menu_msg_btn"><?php echo $this->privateMessagesLink ?></div><?php endif ?>
				</div>
				<ul>
					<li class="jf_ku_mob_tollb_welcome"><?php echo JText::_('COM_KUNENA_PROFILEBOX_WELCOME'); ?>, <?php echo $this->me->getLink() ?></li>
					<li>
						<?php echo JText::_('COM_KUNENA_MYPROFILE_LASTVISITDATE'); ?>:
						<span class="jf_ku_mob_tollb_lastvisit"><?php echo KunenaDate::getInstance($this->me->lastvisitDate)->toKunena('date_today'); ?> (<?php echo KunenaDate::getInstance($this->me->lastvisitDate)->toKunena('ago'); ?>)</span>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			
			<?php if (!empty($this->announcementsLink)) : ?><div class="jf_ku_mob_menu_annnounc_btn"><?php echo $this->announcementsLink ?></div><?php endif ?>
			<div class="jf_ku_mob_menu_e_l_btn closed"><?php echo JText::_('COM_KUNENA_JF_KU_MOBILE_SHOW_MENU'); ?></div>
			
			<div class="jf_ku_mob_menu_expand_items">
				<?php $this->displayModulePosition('jf_kunena_mobilemenu'); ?>
				<!-- 
				<ul>
					<li><a href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=topics&layout=user&mode=default') ?>"><?php echo JText::_('COM_KUNENA_JF_KU_MOBILE_MY_TOPICS'); ?></a></li>
					<li><a href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=search') ?>"><?php echo JText::_('COM_KUNENA_JF_KU_MOBILE_SEARCH'); ?></a></li>
					<li><a href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=topics&mode=replies') ?>"><?php echo JText::_('COM_KUNENA_JF_KU_MOBILE_RECENT_TOPICS'); ?></a></li>
					<li><a href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=topics&mode=noreplies') ?>"><?php echo JText::_('COM_KUNENA_JF_KU_MOBILE_NO_REPLIES'); ?></a></li>
				</ul>
				-->
				<div class="menu_back"><?php echo JText::_('COM_KUNENA_JF_KU_MOBILE_GO_BACK'); ?></div>
				<div class="jf_ku_mob_menu_expand_loader menu"></div>
			</div>
			
			<div class="jf_ku_mob_menu_expand_loader core"></div>
		</div>
		
		
		<div id="jf_ku_mobile_menu">
			
			<div class="jf_ku_mob_menu_btns home">
				<a class="jf_ku_mob_menu_btns_inner" href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=category&layout=list') ?>"></a>
			</div>
			<div class="jf_ku_mob_menu_btns profile">
				<a class="jf_ku_mob_menu_btns_inner" href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=user') ?>"></a>
			</div>
			<div class="jf_ku_mob_menu_btns expand closed"></div>
			<div class="jf_ku_mob_menu_btns newtopic">
				<a class="jf_ku_mob_menu_btns_inner" href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=topic&layout=create') ?>"></a>
			</div>
			<div class="jf_ku_mob_menu_btns logout">
				<?php if ($this->logout->enabled()) : ?>
					<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" method="post" name="login">
						<input type="hidden" name="view" value="user" />
						<input type="hidden" name="task" value="logout" />
						[K=TOKEN]
						<input type="submit" name="submit" class="jf_ku_mob_menu_btns_inner" value="" />
					</form>
				<?php endif; ?>
			</div>

		</div>
</div>