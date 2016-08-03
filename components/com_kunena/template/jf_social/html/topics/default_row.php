<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Topics
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

// Disable caching
$this->cache = false;

$jfku_catid = $this->topic->category_id;
$jfku_id = $this->topic->id;
$task = KunenaRoute::_("index.php?option=com_kunena&view=topic&task=reply&catid={$jfku_catid}&id={$jfku_id}&" . JUtility::getToken() . '=1');
$jfku_layout = KunenaRoute::_("index.php?option=com_kunena&view=topic&layout=reply&catid={$jfku_catid}&id={$jfku_id}");
$this->topicButtons = new JObject();
// Reply topic
if ($this->topic->authorise('reply')) {
	$this->topicButtons->set('reply', $this->getButton(sprintf($jfku_layout, 'reply'), 'reply', 'topic', 'communication'));
}
// Show one topic row
?>

<tr class="<?php echo $this->getTopicClass('k', 'row') ?>">

	<td class="kcol-mid kcol-ktopicicon">
		<?php echo $this->getTopicLink ( $this->topic, 'unread', $this->topic->getIcon() ); ?>
	</td>

	<td class="kcol-mid kcol-ktopictitle">
		<div class="ktopic-details">
			<?php if ($this->topic->attachments) echo $this->getIcon ( 'ktopicattach', JText::_('COM_KUNENA_ATTACH') ); ?>
			<?php if ($this->topic->poll_id) echo $this->getIcon ( 'ktopicpoll', JText::_('COM_KUNENA_ADMIN_POLLS') ); ?>

			<div class="ktopic-title-cover">
				<?php if ($this->topic->locked != 0) { ?>
					<span class="jfku_topic_status closed jf_ku_tipsy_s_arial" title="<?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_STATUS_CLOSED_T'); ?>"><?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_STATUS_CLOSED'); ?></span>
				<?php } ?>
				<?php if ($this->topic->ordering != 0)  { ?>
					<span class="jfku_topic_status sticky jf_ku_tipsy_s_arial" title="<?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_STATUS_IMPORTANT_T'); ?>"><?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_STATUS_IMPORTANT'); ?></span>
				<?php } ?>
				<?php if ($this->topic->icon_id == 8) { ?>
					<span class="jfku_topic_status solved jf_ku_tipsy_s_arial" title="<?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_STATUS_SOLVED_T'); ?>"><?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_STATUS_SOLVED'); ?></span>
				<?php } ?>
				<?php
				echo $this->getTopicLink ( $this->topic, null, null, null, 'ktopic-title km' );
				if ($this->topic->getUserTopic()->favorite) {
					echo $this->getIcon ( 'kfavoritestar', JText::_('COM_KUNENA_FAVORITE') );
				}
				if ($this->me->exists() && $this->topic->getUserTopic()->posts) {
					echo $this->getIcon ( 'ktopicmy', JText::_('COM_KUNENA_MYPOSTS') );
				}
				if ($this->topic->unread) {
					echo $this->getTopicLink ( $this->topic, 'unread', '<sup dir="ltr" class="knewchar">(' . $this->topic->unread . ' ' . JText::_('COM_KUNENA_A_GEN_NEWCHAR') . ')</sup>', null, 'jfku_topic_new' );
				}
				?>
			</div>
			
			<div class="ktopic-details-kcategory">
				<?php if (!isset($this->category) || $this->category->id != $this->topic->getCategory()->id) : ?>
				<span class="ktopic-category"> <?php echo JText::sprintf('COM_KUNENA_CATEGORY_X', $this->getCategoryLink ( $this->topic->getCategory() ) ) ?></span>
				<?php endif; ?>
			</div>
			<div class="ktopic-details-kcategory">
				
			</div>

			<div class="clear"></div>
			<div class="jf_ku_cat_t_r jfku_kcategory">
				<div class="jf_ku_cat_topics">
					<span class="kcat-topics"><?php echo JText::_('COM_KUNENA_GEN_HITS');?>:</span>
					<span class="kcat-topics-number"><?php echo $this->formatLargeNumber ( $this->topic->hits );?></span>
				</div>
				<div class="jf_ku_cat_replies">
					<span class="kcat-replies"><?php echo JText::_('COM_KUNENA_GEN_REPLIES');?>:</span>
					<span class="kcat-replies-number"><?php echo $this->formatLargeNumber ( max(0,$this->topic->getTotal()-1) ); ?></span>
				</div>
			</div>
			
			<div class="ktopic-details-kcategory jf_ku_cat_item_paging">
			<?php if ($this->pages > 1) : ?>
			<ul class="kpagination">
				<li class="page"><?php echo JText::_('COM_KUNENA_PAGE') ?></li>
				<li><?php echo $this->GetTopicLink ( $this->topic, 0, 1 ) ?></li>
				<?php if ($this->pages > 4) : $startPage = $this->pages - 3; ?>
				<li class="more">...</li>
				<?php else: $startPage = 1; endif;
				for($hopPage = $startPage; $hopPage < $this->pages; $hopPage ++) : ?>
				<li><?php echo $this->getTopicLink ( $this->topic, $hopPage, $hopPage+1 ) ?></li>
				<?php endfor; ?>
			</ul>
			<?php endif; ?>
			</div>

			<?php if (!empty($this->keywords)) : ?>
			<div class="ktopic-keywords">
				<?php echo JText::sprintf('COM_KUNENA_TOPIC_TAGS', $this->escape($this->keywords)) ?>
			</div>
			<?php endif; ?>
			<div class="jfku_topic_preview_btn jf_ku_tipsy_s_arial" title="<?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_PREVIEW_BTN'); ?>"><?php echo JText::_('COM_KUNENA_JF_KU_TOPIC_LIST_PREVIEW'); ?></div>
			<div class="clear"></div>
		</div>
		<div class="jfku_topic_preview_content">
			<div class="jfku_topic_preview_loader"></div>
			<div class="jfku_topic_preview_inner">
			
				<div class="jfku_firstpost">
					<div class="avatar">
						<?php echo $this->firstPostAuthor->getLink($this->firstPostAuthor->getAvatarImage('klist-avatar', 'welcome')) ?>
					</div>
					<div class="info">
						<div class="info_title">
							<span title="<?php echo KunenaDate::getInstance($this->topic->first_post_time)->toKunena('config_post_dateformat_hover'); ?>">
								<?php echo JText::_('COM_KUNENA_TOPIC_STARTED_ON') . ' ' . KunenaDate::getInstance($this->topic->first_post_time)->toKunena('config_post_dateformat');?>
							</span>
							<span><?php echo JText::_('COM_KUNENA_BY') . ' ' . $this->topic->getFirstPostAuthor()->getLink() ?></span>
						</div>
						<div class="post_msg">
							<?php echo KunenaHtmlParser::stripBBCode ( $this->topic->first_post_message, 300); ?>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php if ($this->topic->getReplies() > 0) : ?>
					<div class="otherposts"><div class="narrow">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</div></div>
					<div class="jfku_lastpost">
						<div class="avatar">
							<?php echo $this->lastPostAuthor->getLink($this->lastPostAuthor->getAvatarImage('klist-avatar', 'welcome')) ?>
						</div>
						<div class="info">	
							<div class="info_title">
								<span>
									<?php
										echo $this->getTopicLink ( $this->topic, 'last', JText::_('COM_KUNENA_GEN_LAST_POST') );
										echo ' ' . JText::_('COM_KUNENA_BY') . ' ' . $this->topic->getLastPostAuthor()->getLink();
									?>
								</span>
								<span title="<?php echo KunenaDate::getInstance($this->topic->last_post_time)->toKunena('config_post_dateformat_hover'); ?>">
									<?php echo KunenaDate::getInstance($this->topic->last_post_time)->toKunena('config_post_dateformat'); ?>
								</span>
							</div>
							<div class="post_msg">
								<?php echo KunenaHtmlParser::stripBBCode ( $this->topic->last_post_message, 300)?>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				<?php endif; ?>
				
				<div class="jfku_useractions">
					<?php if ($this->topic->authorise('reply')) :
						echo $this->topicButtons->set('reply', $this->getButton(sprintf($jfku_layout, 'reply'), 'reply', 'topic', 'communication'));
					endif; ?>
					
					<?php echo $this->getTopicLink($this->topic, null, $this->getButton (null, 'gototopic', 'GO_TO_TOPIC',null  ) ) ?>
					
					<?php if ($this->topic->unread):?>
					<?php echo $this->getTopicLink($this->topic, 'unread', $this->getButton ( null, 'gotounread', JText::_('GO_TO_FIRST_UNREAD'),null  ) ) ?>
					<?php endif; ?>

					<span class="jf_ku_preview_close"></span>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
	</td>

	<td class="kcol-mid kcol-ktopiclastpost">
		<div class="klatest-post-info">
			<?php if (!empty($this->topic->avatar)) : ?>
			<span class="ktopic-latest-post-avatar hidden-phone"> <?php echo $this->topic->getLastPostAuthor()->getLink( $this->topic->avatar ) ?></span>
			<?php endif; ?>

			<span class="ktopic-latest-post">
			<?php
			echo $this->getTopicLink ( $this->topic, 'last', JText::_('COM_KUNENA_GEN_LAST_POST') );
			echo ' ' . JText::_('COM_KUNENA_BY') . ' ' . $this->topic->getLastPostAuthor()->getLink();
			?>
			</span>
         </div>
         <div class="klatest-post-info">
			<span class="ktopic-date"  title="<?php echo KunenaDate::getInstance($this->topic->last_post_time)->toKunena('config_post_dateformat_hover'); ?>">
				<?php echo KunenaDate::getInstance($this->topic->last_post_time)->toKunena('config_post_dateformat'); ?>
			</span>
		</div>
	</td>

<?php if (!empty($this->topicActions)) : ?>
	<td class="kcol-mid ktopicmoderation"><input class ="kcheck" type="checkbox" name="topics[<?php echo $this->topic->id?>]" value="1" /></td>
<?php endif; ?>
</tr>
<!-- Module position -->
<?php if ($this->module) : ?>
<tr>
	<td class="ktopicmodule" colspan="<?php echo empty($this->topicActions) ? 5 : 6 ?>"><?php echo $this->module; ?></td>
</tr>
<?php endif; ?>
