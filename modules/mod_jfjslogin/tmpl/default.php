<?php
/**
 * JF JS Login
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
defined('_JEXEC') or die('Restricted access');
?>
<div id="jf-js-login">
<?php
if( $my->isOnline() && $my->id != 0 )
{
	$inboxModel			= CFactory::getModel('inbox');
	$notifModel 		= CFactory::getModel('notification');
	$filter				= array();
	$filter['user_id']	= $my->id;
	$friendModel		= CFactory::getModel('friends');
	$profileid 			= JRequest::getVar('userid',0,'GET');
	
	CFactory::load( 'libraries' , 'toolbar' );
	$toolbar = CToolbarLibrary::getInstance();
	$newMessageCount		= $toolbar->getTotalNotifications('inbox');
	$newEventInviteCount	= $toolbar->getTotalNotifications('events');
	$newFriendInviteCount	= $toolbar->getTotalNotifications('friends');
	$newGroupInviteCount	= $toolbar->getTotalNotifications('groups');
	
	$myParams				=&	$my->getParams();
	$newNotificationCount	= $notifModel->getNotificationCount($my->id,'0',$myParams->get('lastnotificationlist',''));
	$newEventInviteCount	= $newEventInviteCount + $newNotificationCount;
	
	$params->def('unreadCount',	$inboxModel->countUnRead ($filter));
	$params->def('pending', $friendModel->countPending($my->id));
	$params->def('myLink', CRoute::_('index.php?option=com_community&view=profile&userid='.$my->id));
	$params->def('myName', $my->getDisplayName());
	$params->def('myAvatar', $my->getAvatar());
	$params->def('myId', $my->id);
	$params->def('myKarma', CUserPoints::getPointsImage($my));
	
	$enablekarma	= $config->get('enablekarma') ? $params->get('show_karma' , 1 ) : $config->get('enablekarma');
	$params->def('enablekarma', $enablekarma);
	
	$document	= JFactory::getDocument();
	
	CFactory::load( 'helpers' , 'string');
	
	$unreadCount 		= $params->get('unreadCount', 1);
	$pending 			= $params->get('pending', 1);
	$myLink 			= $params->get('myLink', 1);
	$myName 			= $params->get('myName', 1);
	$myAvatar 			= $params->get('myAvatar', 1);
	$myId 				= $params->get('myId', 1);
	$myKarma 			= $params->get('myKarma', 1);
	$show_avatar 		= $params->get('show_avatar', 1);
	$show_karma 		= $params->get('enablekarma', 1);
	$show_name			= $params->get('show_name', 1);
	$show_email			= $params->get('show_email', 1);
	$show_acc_pri_link	= $params->get('show_acc_pri_link', 1);
	$show_profile_link	= $params->get('show_profile_link', 1);
	$show_kunena_link	= $params->get('show_kunena_link', 1);
	$show_logout_btn	= $params->get('show_logout_btn', 1);
	$show_jfnotis		= $params->get('show_jfnotis', 1);
	
	$config	= CFactory::getConfig();
	$uri	= CRoute::_('index.php?option=com_community' , false );
	$uri	= base64_encode($uri);

	CFactory::load('helpers' , 'string' );
?>

		<div class="jf-js-login-first">
			<div class="jf-js-login-greeting">
				<div class="jf-js-login-greeting-toggler">

						<div class="login-greeting">
							<?php echo JText::_('MOD_JF_JS_LOGIN_HI'); ?> <?php echo CStringHelper::escape( $myName ); ?>
							<span class='jf-js-login-imp-icon'></span>
						</div>

				</div>
			</div>

			<div class="jf-js-login-loggedcont s-jf-js-login-v">
				<div class="jf-js-login-loggedcont-bg">
					<div class="jf-js-login-loggedcont-tick"></div>
					<div class="jf-js-login-loggedcont-loader">
					
						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td>
									<div class="section1">
										<?php if($show_avatar) { ?>
											<div class="jf-jf-js-login-avatar profile-avatar">
												<img class="avatar" src="<?php echo $myAvatar; ?>" alt="<?php echo CStringHelper::escape( $myName ); ?>" width="94px"/>
												<a class="jf-jf-js-login-change-avatar" href="javascript:void(0)" onclick="joms.photos.uploadAvatar('profile','<?php echo $myId; ?>')">
													<?php echo JText::sprintf('MOD_JF_JS_LOGIN_CHANGE_AVATAR') ?>
												</a>
											</div>
										<?php } ?>
										
										<?php if($show_karma) { ?>
											<div class="karma">
												<img src="<?php echo $myKarma; ?>" alt="<?php echo JText::_('MOD_JF_JS_LOGIN_KARMA'); ?>" width="98" />
											</div>
										<?php } ?>
										
									</div>
								</td>
								<td>
									<div class="section2">
										<?php if($show_name) { ?>
											<div class="section2-name">
												<?php echo CStringHelper::escape( $myName ); ?>
											</div>
										<?php } ?>
										<?php if($show_email) { ?>
											<div class="section2-email">
												<?php echo $my->email; ?>
											</div>
										<?php } ?>
										
										<?php if($show_acc_pri_link) { ?>
											<div class="section2-acc-pri">
											
												<div class="section2-half-left">
													<a style="line-height: 18px;" href="<?php echo CRoute::_('index.php?option=com_community&view=profile&task=edit'); ?>">
														<?php echo JText::_('MOD_JF_JS_LOGIN_ACCOUNT'); ?>
													</a>
												</div>
												
												<div class="section2-half-right">
													<a style="line-height: 18px;" href="<?php echo CRoute::_('index.php?option=com_community&view=profile&task=preferences'); ?>">
														<?php echo JText::_('MOD_JF_JS_LOGIN_PRIVACY'); ?>
													</a>
												</div>
											
											</div>
										<?php } ?>
										
										<div class="section2-prof">
										
											<?php if($show_profile_link) { ?>
												<div class="section2-half-left">
													<a style="line-height: 18px;" href="<?php echo CRoute::_('index.php?option=com_community&view=profile'); ?>">
														<?php echo JText::_('MOD_JF_JS_LOGIN_SOCIAL_PROFILE'); ?>
													</a>
												</div>
											<?php } ?>
											
											<?php if($show_kunena_link) { ?>
												<?php 
													// Kunena detection and version check
													$minKunenaVersion = '2.0';
													if (!class_exists('KunenaForum') || !KunenaForum::isCompatible($minKunenaVersion)) {
														echo JText::sprintf('MOD_JF_JS_LOGIN_KUNENA_IS_NOT_INSTALLED', $minKunenaVersion);
														return;
													} 
													else {
												?>
													<style>#jf-js-login .jf-js-login-loggedcont.s-jf-js-login-v .jf-js-login-loggedcont-loader table tr td .section2 .section2-prof .section2-half-left{width:46%;margin-right:1%;}</style>
													<div class="section2-half-right">
														<a style="line-height: 18px;" href="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=user'); ?>">
															<?php echo JText::_('MOD_JF_JS_LOGIN_FORUM_PROFILE'); ?>
														</a>
													</div>
												<?php } ?>
											<?php } ?>
										
										</div>
										
									</div>								
								</td>
							</tr>
						</table>
						
						<?php if($show_logout_btn) { ?>
							<div class="logout">
								<form action="<?php echo JRoute::_('index.php'); ?>" method="post" name="jfjsloginlogout" id="jfjsloginlogout">	
									<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT'); ?>" />
									<input type="hidden" name="option" value="<?php echo COM_USER_NAME;?>" />
									<input type="hidden" name="task" value="<?php echo COM_USER_TAKS_LOGOUT;?>" />
									<input type="hidden" name="return" value="<?php echo $uri; ?>" />
									<?php echo JHtml::_('form.token'); ?>
								</form>
							</div>
						<?php } ?>
					
					</div>
				</div>
			</div>
		</div>
		
		
		<?php if($show_jfnotis) { ?>
			<div class="jf-js-login-second">
			
				<script type="text/javascript">jQuery(function(){var jfjslogin_eic=parseInt(<?php echo $newEventInviteCount;?>);var jfjslogin_fic=parseInt(<?php echo $newFriendInviteCount;?>);var jfjslogin_mc=parseInt(<?php echo $newMessageCount;?>);if(isNaN(jfjslogin_eic)){var jfjslogin_eic=parseInt(0)}if(isNaN(jfjslogin_fic)){var jfjslogin_fic=parseInt(0)}if(isNaN(jfjslogin_mc)){var jfjslogin_mc=parseInt(0)}var jfjslogin_not_c=jfjslogin_eic+jfjslogin_fic+jfjslogin_mc;if(jfjslogin_not_c==0){jQuery('#jfjslogin-not-c').addClass('grey').find('div').html(jfjslogin_not_c)}else{jQuery('#jfjslogin-not-c').addClass('red').find('div').html(jfjslogin_not_c)}});</script>
				
				<div id="jfjslogin-not-c">
					<div></div>
				</div>
				
				<div class="jf-js-login-loggedcont s-jf-js-login-v">
					<div class="jf-js-login-loggedcont-bg">
						<div class="jf-js-login-loggedcont-tick"></div>
						<div class="jf-js-login-loggedcont-loader">

							<table class="jf-js-login-noti-list" cellpadding="0" cellspacing="0" border="0" width="100%">
								<tr class="noti-set" onclick="javascript:joms.notifications.showWindow();">
									<td class="opacity">
										<div class="name"><?php echo JText::_('MOD_JF_JS_LOGIN_NOTIFICATIONS_GLOBAL');?></div>
									</td>
									<td>
										<?php if( $newEventInviteCount ) { ?>
											<div class="notifcount"><?php echo $newEventInviteCount; ?></div>
										<?php } else { echo "<div class='no-notifcount'>0</div>";} ?>
									</td>
								</tr>
								<tr class="friendreq-set" href="<?php echo CRoute::_( 'index.php?option=com_community&view=friends&task=pending' );?>" onclick="joms.notifications.showRequest();return false;">
									<td class="opacity">
										<div class="name"><?php echo JText::_('MOD_JF_JS_LOGIN_NOTIFICATIONS_INVITE_FRIENDS');?></div>
									</td>
									<td>
										<?php if( $newFriendInviteCount ){ ?>
											<div class="notifcount"><?php echo $newFriendInviteCount; ?></div>
										<?php } else { echo "<div class='no-notifcount'>0</div>";} ?>
									</td>
								</tr>
								<tr class="msg-set last" href="<?php echo CRoute::_( 'index.php?option=com_community&view=inbox' );?>" onclick="joms.notifications.showInbox();return false;">
									<td class="opacity">
										<div class="name"><?php echo JText::_('MOD_JF_JS_LOGIN_NOTIFICATIONS_INBOX');?></div>
									</td>
									<td>
										<?php if( $newMessageCount ){ ?>
											<div class="notifcount"><?php echo $newMessageCount; ?></div>
										<?php } else { echo "<div class='no-notifcount'>0</div>";} ?>							
									</td>
								</tr>
							</table>
				
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
<?php
}
else
{
	$content = '';
	
		$uri	= CRoute::_('index.php?option=com_community&view='.$config->get('redirect_login') , false );
		$uri	= base64_encode($uri);
		$html	= '';

		if(JPluginHelper::isEnabled('authentication', 'openid')) {
			JHTML::_('script', 'openid');
		}
?>
	<div id="jf-js-loginbackout"></div>
	<a class="jf-js-login-button jf-tipsy-n" title="<?php echo JText::_('JF_CLICK_TO_LOGIN'); ?>">
		<span></span>
	</a>
	<div class="jf-js-login-content">
		<form action="<?php echo CRoute::_( 'index.php?option='.COM_USER_NAME.'&task='.COM_USER_TAKS_LOGIN ); ?>" method="post" name="form-login" id="form-login" >
			<?php echo $params->get('pretext'); ?>
			<fieldset class="userdata">
				<p class="jf-js-login-title">
					<span><?php echo JText::_('MOD_JF_JS_LOGIN_AUTHORIZATION') ?><span>
				</p>
				
				<p id="form-login-username">
					<label class="jf-js-login-username-icon" for="username"><span></span></label>
					<input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" placeholder="<?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_USERNAME') ?>" />
				</p>
				<p id="form-login-password">
					<label class="jf-js-login-password-icon" for="passwd"><span></span></label>
					<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18" placeholder="<?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_PASSWORD') ?>" />
				</p>
				<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
					<p id="form-login-remember">
						<label for="remember"><?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_REMEMBER_ME') ?></label>
						<div class="jf-js-login-checkbox"><input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/></div>
					</p>
				<?php endif; ?>
				<input type="submit" name="Submit" class="jf-js-login-authorization-button" value="<?php echo JText::_('JLOGIN') ?>" />
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="user.login" />
				<input type="hidden" name="return" value="<?php echo $uri; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</fieldset>
			<div class="clear"></div>
			<ul class="jf-js-login-forgot">
				<li class="first">
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
					<?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_FORGOT_YOUR_PASSWORD'); ?></a>
				</li>
				<li class="last">
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
					<?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_FORGOT_YOUR_USERNAME'); ?></a>
				</li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
			<ul class="jf-js-login-activation">
				<li class="center">
					<a href="<?php echo CRoute::_( 'index.php?option=com_community&view=register&task=activation' ); ?>">
					<?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_RESEND_ACTIVATION_CODE'); ?></a>
				</li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
			<?php $usersConfig = JComponentHelper::getParams('com_users'); if ($usersConfig->get('allowUserRegistration')) : ?>
				<div class="jf-js-login-register">
					<a href="<?php echo CRoute::_( 'index.php?option=com_community&view=register' ); ?>">
						<?php echo JText::_('MOD_JF_JS_LOGIN_VALUE_REGISTER'); ?></a>
				</div>
			<?php endif; ?>
		</form>
	</div>
<?php
}
?>
</div>