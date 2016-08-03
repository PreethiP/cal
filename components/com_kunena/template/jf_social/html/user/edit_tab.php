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
?>
<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" method="post" name="kuserform" class="form-validate" enctype="multipart/form-data">
	<input type="hidden" name="view" value="user" />
	<input type="hidden" name="task" value="save" />
	<input type="hidden" name="userid" value="<?php echo $this->user->id ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>

<div id="kprofile-edit">

		<a href="#jfku_EditUser" role="button" class="jf_ku_modalbtn btn" data-toggle="modal"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_USER'); ?></a>
		<div id="jfku_EditUser" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_USER'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayEditUser(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>

		<a href="#jfku_EditProfile" role="button" class="jf_ku_modalbtn btn" data-toggle="modal"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_PROFILE'); ?></a>
		<div id="jfku_EditProfile" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_PROFILE'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayEditProfile(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>
		
		<?php if ($this->editavatar) : ?>
			<a href="#jfku_EditAvatar" role="button" class="jf_ku_modalbtn btn" data-toggle="modal"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_AVATAR'); ?></a>
			<div id="jfku_EditAvatar" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_AVATAR'); ?></h3>
				</div>
				<div class="modal-body">
					<?php $this->displayEditAvatar(); ?>
				</div>
				<div class="jf_ku_modal_loader"></div>
			</div>
		<?php endif; ?>
		
		<a href="#jfku_EditSettings" role="button" class="jf_ku_modalbtn btn" data-toggle="modal"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_SETTINGS'); ?></a>
		<div id="jfku_EditSettings" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel"><?php echo JText::_('COM_KUNENA_PROFILE_EDIT_SETTINGS'); ?></h3>
			</div>
			<div class="modal-body">
				<?php $this->displayEditSettings(); ?>
			</div>
			<div class="jf_ku_modal_loader"></div>
		</div>

	<div class="kbutton-container">
		<button class="kbutton ks validate" type="submit"><?php echo JText::_('COM_KUNENA_SAVE'); ?></button>
		<input type="button" name="cancel" class="kbutton" value="<?php echo (' ' . JText::_('COM_KUNENA_CANCEL') . ' ');?>"
			onclick="javascript:window.history.back();"
			title="<?php echo (JText::_('COM_KUNENA_EDITOR_HELPLINE_CANCEL'));?>" />
	</div>
</div>
</form>
