<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
require_once 'jf_ku_mob_det.php';
$jfkudetect = new JF_KU_Mobile_Detect;

$document = JFactory::getDocument();
$template = KunenaFactory::getTemplate();
?>
<div id="Kunena" class="layout">
	<div id="jf_ku_header">
		<div class="jf_ku_header_cont">
			<?php if($template->params->get('jfkuQuickNavPos')){ ?>
				<div class="jf_ku_modalbtn_cont">
					<div class="jf_ku_modalbtn jf_ku_tipsy_s" type="button" data-toggle="modal" data-target="#jf_ku_quicknav" title="<?php echo JText::_('COM_KUNENA_JF_KU_QUICK_NAVIGATION'); ?>"></div>
				</div>
				<div id="jf_ku_quicknav" class="jf_ku_modal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="jf_ku_quicknav_label" aria-hidden="true" style="display:none">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h3 id="jf_ku_quicknav_label"><?php echo JText::_('COM_KUNENA_JF_KU_QUICK_NAVIGATION'); ?></h3>
					</div>
					<div class="modal-body">
						<?php $this->displayModulePosition('jf_kunena_quicknav'); ?>
					</div>
					<div class="jf_ku_modal_loader"></div>
				</div>
			<?php } ?>
			
			<?php if($template->params->get('jfkuLoginPos')){ ?>
				<div id="jf_kunena_login">
					<?php $this->displayModulePosition('jf_kunena_login'); ?>
				</div>
			<?php } ?>
			
			<?php if($template->params->get('jfkuAnnouncements')){ ?>
				<?php if ( $this->me->isModerator()) : ?>
					<a class="jf_kunena_announc_btn jf_ku_tipsy_s" href="<?php echo KunenaRoute::_("index.php?option=com_kunena&view=announcement&layout=list"); ?>" title="<?php echo JText::_('COM_KUNENA_JF_KU_ANNOUCEMENTS'); ?>"></a>
				<?php endif ?>
			<?php } ?>
			
			<?php if($template->params->get('jfkuSearchPos')){ ?>
				<div id="jf_kunena_search">
					<?php $this->displayModulePosition('jf_kunena_search'); ?>
				</div>
			<?php } ?>
			
			<?php
				$this->displayMenu ();
			?>
			<div class="clear"></div>
		</div>
	</div>
	<div id="jf_ku_layout" class="<?php if($template->params->get('jfkuSideBar')==0){ ?>no_sidebar<?php } ?><?php if($template->params->get('jfkuSideBarStatus')){ ?> opened<?php } else { ?> closed<?php } ?>">
		<div class="jf_ku_layout_content">
			<?php
				$this->displayBreadcrumb ();

				// Display current view/layout
				$this->displayLayout();

				$this->displayBreadcrumb ();
			?>
		</div>
		<div class="jf_ku_sidebar_loader"></div>
	</div>
	<?php if($template->params->get('jfkuSideBar')==1){ ?>
		<div id="jf_ku_sidebar" class="<?php if($template->params->get('jfkuSideBarStatus')){ ?>opened<?php } else { ?>closed<?php } ?>">
			<?php if($template->params->get('jfkuSideBarToggleBtn')){ ?><div class="jf_ku_sidebar_btn"></div><?php } ?>
			<div class="jf_ku_sidebar_content" style="<?php if($template->params->get('jfkuSideBarStatus')){ ?>display:block<?php } else { ?>display:none<?php } ?>">
				<?php $this->displayModulePosition('jf_kunena_sidebar'); ?>
			</div>
		</div>
	<?php } ?>
	<div class="clear"></div>
	<?php
		$this->displayFooter ();
	?>
	
	<?php if ($template->params->get('jfku_JFlogo')==1) { ?>
		<div class="jfku_jflogo">
			<a class="jf_ku_tipsy_n" href="<?php echo $template->params->get('jfku_JFlogoLink'); ?>" target="_blank" title="<?php echo $template->params->get('jfku_JFlogoTitle'); ?>"></a>
		</div>
	<?php } ?>
	
	<?php if ($jfkudetect->isMobile()) { ?>
		<?php
			$this->displayLoginBox ();
		?>
	<?php } ?>
</div>
