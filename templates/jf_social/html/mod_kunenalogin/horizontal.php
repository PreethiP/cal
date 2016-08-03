<?php
/**
 * Kunena Login Module
 * @package Kunena.mod_kunenalogin
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined('_JEXEC') or die();
$doc = & JFactory::getDocument();
$doc->addStyleSheet('components/com_kunena/template/jf_social/css/jf_social_ku_mkl.css');
$doc->addscript('components/com_kunena/template/jf_social/js/jf_social_ku_mkl.js');
?>
<div id="jf_ku_login">

	<?php if($this->type == 'logout') : ?>
	
		<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" name="login">
		
			<div class="jf_ku_login_first">
			
				<div class="jf_ku_login_greeting jf_ku_tipsy_s" title="<?php echo JText::_('COM_KUNENA_JF_KU_LOGIN_LOGGED_TITLE'); ?>">
					<div class="jf_ku_login_greeting_toggler">
					
						<?php if ($this->params->get('greeting')) : ?>
							<div class="login_greeting">
								<span class="login_greeting_name"><?php echo JText::sprintf('COM_KUNENA_JF_KU_LOGIN_GREETING'); ?> <?php echo $this->me->name; ?></span>
								<span class="jf_ku_login_imp_icon"></span>
							</div>
						<?php endif; ?>
						
					</div>
				</div>
				
				<div class="jf_ku_login_loggedcont">
					<div class="jf_ku_login_loggedcont_bg">
						<div class="jf_ku_login_loggedcont_tick"></div>
						<div class="jf_ku_login_loggedcont_loader">

							<table cellpadding="0" cellspacing="0" border="0" width="100%">
								<tbody>
									<tr>
										<td>
											<div class="section1">
			
												<div class="jf_ku_login_avatar">
													<?php if ($this->params->get('showav')) echo $this->kunenaAvatar( $this->me->userid ) ?>
												</div>
												
												<?php if ($this->params->get('lastlog')) : ?>
													<div class="jf_ku_login_lastvisit">
														<span class="klogin-lasttext"><?php echo JText::_('MOD_KUNENALOGIN_LASTVISIT'); ?></span> - 
														<?php echo $this->lastvisitDate->toSpan('date_today', 'ago', 'klogin-lastdate') ?>
													</div>
												<?php endif; ?>
											
											</div>
										</td>
										<td>
											<div class="section2">
											
												<div class="section2_name">
													<?php echo $this->me->name; ?>
												</div>
												
												<div class="section2_email">
													<?php echo $this->me->email; ?>
												</div>
											
												<div class="section2_acc_pri">
												
													<?php if ($this->params->get('showprofile')) : ?>
														<div class="section2_half_left">
															<?php echo $this->me->getLink ( JText::_ ( 'MOD_KUNENALOGIN_MYPROFILE' ) ); ?>
														</div>
													<?php endif; ?>
													
													<?php if ($this->params->get('showmyposts')) : ?>
														<div class="section2_half_right">
															<?php echo $this->myPosts ?>
														</div>
													<?php endif; ?>
													
												</div>
												
												<div class="section2_prof">
													
													<?php if ($this->privateMessages) : ?>
														<div class="section2_half_left">
															<?php echo $this->privateMessages; ?>
														</div>
													<?php endif; ?>
													
													<?php if ($this->params->get('showrecent')) : ?>
														<div class="section2_half_right">
															<?php echo $this->recentPosts ?>
														</div>
													<?php endif; ?>
														
												</div>
												
											</div>								
										</td>
									</tr>
								</tbody>
							</table>
						
							<div class="logout">	
								<input type="submit" name="Submit" class="button" value="<?php echo JText::_('MOD_KUNENALOGIN_BUTTON_LOGOUT'); ?>" />
								<input type="hidden" name="option" value="com_kunena" />
								<input type="hidden" name="view" value="user" />
								<input type="hidden" name="task" value="logout" />
								<input type="hidden" name="return" value="<?php echo $this->return; ?>" />
								<?php echo JHTML::_( 'form.token' ); ?>
								<div class="clear"></div>
							</div>
							
						</div>
					</div>
				</div>
			
			</div>
			
		</form>

	<?php else : ?>

		<div id="jf_ku_loginbackout"></div>
		<a class="jf_ku_login_button kunena_posiion_hide jf-tipsy-n" title="<?php echo JText::_('JF_CLICK_TO_LOGIN'); ?>">
			<span></span>
		</a>
		<a class="jf_ku_login_button kunena_posiion jf-tipsy-s" title="<?php echo JText::_('JF_CLICK_TO_LOGIN'); ?>">
			<span></span>
		</a>
		<div class="jf_ku_login_content">

			<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" name="login" class="klogin-form-login" >
				<input type="hidden" name="option" value="com_kunena" />

				<?php echo $this->params->get('pretext'); ?>
				<fieldset class="input">
					<p class="jf_ku_login_title">
						<span><?php echo JText::_('JF_AUTHORIZATION') ?><span>
					</p>
					<p id="form-login-username">
						<label class="jf_ku_login_username_icon" for="klogin-username"><span></span></label>
						<input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" placeholder="<?php echo JText::_('MOD_KUNENALOGIN_USERNAME') ?>" />
					</p>
					<p id="form-login-password">
						<label class="jf_ku_login_password_icon" for="klogin-passwd"><span></span></label>
						<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18" placeholder="<?php echo JText::_('MOD_KUNENALOGIN_PASSWORD') ?>" />
					</p>
					
					<?php if($this->remember) : ?>
					<p id="form-login-remember">
						<label for="klogin-remember"><?php echo JText::_('MOD_KUNENALOGIN_REMEMBER_ME') ?></label>
						<div class="jf_ku_login_checkbox"><input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/></div>
					</p>
					<?php endif; ?>
					<input type="submit" name="Submit" class="jf_ku_login_authorization_button" value="<?php echo JText::_('MOD_KUNENALOGIN_BUTTON_LOGIN') ?>" />
					<input type="hidden" name="view" value="user" />
					<input type="hidden" name="task" value="login" />
					<input type="hidden" name="return" value="<?php echo $this->return; ?>" />
					<?php echo JHTML::_( 'form.token' ); ?>
				</fieldset>
				
				<ul class="jf_ku_login_forgot">
					<li class="first">
						<a href="<?php echo $this->lostPasswordUrl ?>" rel="nofollow">
							<?php echo JText::_('COM_KUNENA_PROFILEBOX_FORGOT_PASSWORD') ?>
						</a>
					</li>
					<li class="last">
						<a href="<?php echo $this->lostUsernameUrl ?>" rel="nofollow">
							<?php echo JText::_('COM_KUNENA_PROFILEBOX_FORGOT_USERNAME') ?>
						</a>
					</li>
					<div class="clear"></div>
				</ul>
				<?php if ($this->registerUrl) : ?>
					<div class="jf_ku_login_register">
						<a href="<?php echo $this->registerUrl ?>" rel="nofollow">
							<?php echo JText::_('COM_KUNENA_PROFILEBOX_CREATE_ACCOUNT') ?>
						</a>
					</div>
				<?php endif; ?>
				<div class="jf_ku_login_close"></div>
				<?php echo $this->params->get('posttext'); ?>
			</form>
			
		</div>

	<?php endif; ?>

</div>