<?php
/**
* Kunena Component
* @package Kunena.Template.JF_Social
*
* @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/
defined( '_JEXEC' ) or die();

$app = JFactory::getApplication();
$document = JFactory::getDocument();
$template = KunenaFactory::getTemplate();

// Template requires Mootools 1.2 framework
$template->loadMootools();


if ( KunenaFactory::getConfig()->lightbox == 1 ) {
	$template->addStyleSheet ( 'css/mediaboxAdv.css');
	$template->addScript( 'js/mediaboxAdv.js' );
}
$template->addScript ( 'js/default.js' );

$rtl = JFactory::getLanguage()->isRTL();

if (file_exists ( JPATH_ROOT . "/templates/{$app->getTemplate()}/css/kunena.forum.css" )) {
	CKunenaTools::addStyleSheet ( JURI::root(true). "templates/{$app->getTemplate()}/css/kunena.forum.css" );
	CKunenaTools::addStyleSheet ( JURI::root(true). "templates/{$app->getTemplate()}/css/kunena.default.css" );
} else {
	$template->addStyleSheet ( 'css/kunena.forum.css' );
	$template->addStyleSheet ( 'css/kunena.default.css' );
}
$cssurl = JURI::root(true) . '/components/com_kunena/template/jf_social/css';
$jsurl = JURI::root(true) . '/components/com_kunena/template/jf_social/js';

	if ($template->params->get('jfkujQuery')==1) {
		$document->addScript('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
	}
	if ($template->params->get('jfkujQuerynoConflict')==1) {
		$template->addScript('js/jquery.noconflict.js');
	}
	if ($template->params->get('jfkujQueryEasing')==1) {
		$template->addScript('js/jquery.easing.min.js');
	}
	if ($template->params->get('jfkujQueryTipsy')==1) {
		$template->addScript('js/jquery.tipsy.js');
	}
	if ($template->params->get('jfkuGoogleWebFont')==1) {
		$jfkuGoogleFontSheet	= $template->params->get('jfkuGoogleFontSheet');
		$jfkuGoogleFontFace		= $template->params->get('jfkuGoogleFontFace');
		if ($template->params->get('jfkuGoogleFontSheet')) {
			$document->addStyleSheet(''.$jfkuGoogleFontSheet.'');
		}
		$document->addStyleDeclaration('#Kunena #jf_ku_header #ktab a span,#Kunena #jf_kunena_search .ksearch #ksearch-keywords,#Kunena #jumpto .inputbox,#Kunena #timeselect .inputboxusl,#Kunena form#jumpto input.kbutton,#Kunena .kheader h2,#Kunena .kheader h2 a,#Kunena .kheader h2 span,#Kunena .knewchar,#Kunena .kblock.kwhoisonline .ktitle,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_e_l_btn,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_expand_items ul li a,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_expand_items .menu_back,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_annnounc_btn a,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner ul,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_tollb_lastvisit,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_edit_prof a,#Kunena .krowmoderation select,#Kunena td.krowmoderation input.kbutton,#Kunena .jfku_topic_status,#Kunena #kforumsearch select.ks,#Kunena #kforumsearch #categorylist,#Kunena #kforumsearch input.ks,#Kunena #kprofile .jf_ku_modalbtn,#Kunena #kprofile-edit button.kbutton,#Kunena #kprofile-edit input.kbutton,#Kunena #kprofile-edit select,#jf_ku_login,#jf_ku_login input,#jf_ku_login span,#jf_ku_login p,#jf_ku_login div{font-family:"'.$jfkuGoogleFontFace.'",arial,tahoma!important}');
	}
	if ($template->params->get('jfku_FontSize')==1) {
		$jfku_FS_Menu			= $template->params->get('jfku_FS_Menu');
		$jfku_FS_Cat_H			= $template->params->get('jfku_FS_Cat_H');
		$jfku_FS_SideBar_M_T	= $template->params->get('jfku_FS_SideBar_M_T');
		$jfku_FS_H_Search		= $template->params->get('jfku_FS_H_Search');
		$jfku_FS_K_Login		= $template->params->get('jfku_FS_K_Login');
		$jfku_FS_K_Login_L		= $template->params->get('jfku_FS_K_Login_L');
		$jfku_FS_JF_Popup_H		= $template->params->get('jfku_FS_JF_Popup_H');
		$jfku_FS_Tipsy			= $template->params->get('jfku_FS_Tipsy');
		$jfku_FS_Topic_Status	= $template->params->get('jfku_FS_Topic_Status');
		$jfku_FS_Select_Tag		= $template->params->get('jfku_FS_Select_Tag');
		$jfku_FS_Select_Tag_L	= $template->params->get('jfku_FS_Select_Tag_L');
		$jfku_FS_Input_Btn		= $template->params->get('jfku_FS_Input_Btn');
		$jfku_FS_K_Jump_Btn		= $template->params->get('jfku_FS_K_Jump_Btn');
		$jfku_FS_Profile_Btns	= $template->params->get('jfku_FS_Profile_Btns');
		$jfku_FS_Profile_Edit	= $template->params->get('jfku_FS_Profile_Edit');
		$jfku_FS_Mob_T_Big_Txt	= $template->params->get('jfku_FS_Mob_T_Big_Txt');
		$jfku_FS_Mob_T_Small_T	= $template->params->get('jfku_FS_Mob_T_Small_T');
		$jfku_FS_Mob_T_Btns		= $template->params->get('jfku_FS_Mob_T_Btns');
		$jfku_FS_Mob_T_Menu		= $template->params->get('jfku_FS_Mob_T_Menu');
		if ($template->params->get('jfku_FS_Menu')) {
			$document->addStyleDeclaration('#Kunena #jf_ku_header #ktab a{font-size:'.$jfku_FS_Menu.'}');
		}
		if ($template->params->get('jfku_FS_Cat_H')) {
			$document->addStyleDeclaration('#Kunena .kheader h2,#Kunena .kheader h2 a{font-size:'.$jfku_FS_Cat_H.'!important}');
		}
		if ($template->params->get('jfku_FS_SideBar_M_T')) {
			$document->addStyleDeclaration('#jf_ku_sidebar .jf_ku_sidebar_content .moduletable h3{font-size:'.$jfku_FS_SideBar_M_T.'!important}');
		}
		if ($template->params->get('jfku_FS_H_Search')) {
			$document->addStyleDeclaration('#Kunena #jf_kunena_search .ksearch #ksearch-keywords{font-size:'.$jfku_FS_H_Search.'}');
		}
		if ($template->params->get('jfku_FS_K_Login')) {
			$document->addStyleDeclaration('#jf_ku_login .jf_ku_login_loggedcont_loader table tr td .section2,#jf_ku_login .jf_ku_login_loggedcont_loader table tr td .section1 .jf_ku_login_lastvisit span{font-size:'.$jfku_FS_K_Login.'}');
		}
		if ($template->params->get('jfku_FS_K_Login_L')) {
			$document->addStyleDeclaration('#jf_ku_login .jf_ku_login_loggedcont .logout .button{font-size:'.$jfku_FS_K_Login_L.'}');
		}
		if ($template->params->get('jfku_FS_JF_Popup_H')) {
			$document->addStyleDeclaration('.modal-header h3{font-size:'.$jfku_FS_JF_Popup_H.'}');
		}
		if ($template->params->get('jfku_FS_Tipsy')) {
			$document->addStyleDeclaration('.default-tipsy{font-size:'.$jfku_FS_Tipsy.'!important}');
		}
		if ($template->params->get('jfku_FS_Topic_Status')) {
			$document->addStyleDeclaration('#Kunena .jfku_topic_status{font-size:'.$jfku_FS_Topic_Status.'}');
		}
		if ($template->params->get('jfku_FS_Select_Tag')) {
			$document->addStyleDeclaration('#Kunena .krowmoderation select,#Kunena #jumpto .inputbox,#Kunena #timeselect .inputboxusl,#Kunena #kforumsearch select.ks,#Kunena #kforumsearch #categorylist,#Kunena .krowmoderation select{font-size:'.$jfku_FS_Select_Tag.'}');
		}
		if ($template->params->get('jfku_FS_Select_Tag_L')) {
			$document->addStyleDeclaration('#Kunena .krowmoderation select,#Kunena #jumpto .inputbox,#Kunena #timeselect .inputboxusl,#Kunena #kforumsearch select.ks,#Kunena #kforumsearch #categorylist,#Kunena .krowmoderation select{letter-spacing:'.$jfku_FS_Select_Tag_L.'}');
		}
		if ($template->params->get('jfku_FS_Input_Btn')) {
			$document->addStyleDeclaration('#Kunena #kforumsearch input.ks{font-size:'.$jfku_FS_Input_Btn.'}');
		}
		if ($template->params->get('jfku_FS_K_Jump_Btn')) {
			$document->addStyleDeclaration('#Kunena form#jumpto input.kbutton,#Kunena td.krowmoderation input.kbutton{font-size:'.$jfku_FS_K_Jump_Btn.'}');
		}
		if ($template->params->get('jfku_FS_Profile_Btns')) {
			$document->addStyleDeclaration('#Kunena #kprofile .jf_ku_modalbtn{font-size:'.$jfku_FS_Profile_Btns.'}');
		}
		if ($template->params->get('jfku_FS_Profile_Edit')) {
			$document->addStyleDeclaration('#Kunena .k-profile h2 span.kheadbtn a{font-size:'.$jfku_FS_Profile_Edit.'!important}');
		}
		if ($template->params->get('jfku_FS_Mob_T_Big_Txt')) {
			$document->addStyleDeclaration('#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_tollb_welcome{font-size:'.$jfku_FS_Mob_T_Big_Txt.'}');
		}
		if ($template->params->get('jfku_FS_Mob_T_Small_T')) {
			$document->addStyleDeclaration('#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner ul{font-size:'.$jfku_FS_Mob_T_Small_T.'}');
		}
		if ($template->params->get('jfku_FS_Mob_T_Btns')) {
			$document->addStyleDeclaration('#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_annnounc_btn a,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_e_l_btn{font-size:'.$jfku_FS_Mob_T_Btns.'}');
		}
		if ($template->params->get('jfku_FS_Mob_T_Menu')) {
			$document->addStyleDeclaration('#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_expand_items ul li a,#jf_ku_mobile_nav #jf_ku_mob_menu_expand_inner .jf_ku_mob_menu_expand_items .menu_back{font-size:'.$jfku_FS_Mob_T_Menu.'}');
		}
	}
	$template->addScript('js/jquery.cookie.min.js');
	if ($template->params->get('jfkuSideBarToggleMod')==1) {
		$jfkuSideBarToggleMod = 'jQuery(document).ready(function($){$("#jf_ku_sidebar .moduletable h3").addClass("jf_ku_sidemod_toggle opened");});';
		$document->addScriptDeclaration($jfkuSideBarToggleMod);
	}
	if ($template->params->get('jfkuSideBarToggleStatus')==0) {
		$jfkuSideBarToggleStatus = 'jQuery(document).ready(function($){$("#jf_ku_sidebar .moduletable h3").removeClass("opened").addClass("closed").next().hide();});';
		$document->addScriptDeclaration($jfkuSideBarToggleStatus);
	}
	if ($template->params->get('jfkuStickyHeader')==1) {
		$jfkuStickyHeader = 'jQuery(document).ready(function(b){function a(){var d=b("#jf_ku_header"),c=b(".jf_ku_header_cont");b(window).scroll(function(){if(b(this).scrollTop()>400){d.addClass("jf_ku_h_fixed");c.addClass("rt-container")}else{d.removeClass("jf_ku_h_fixed");c.removeClass("rt-container")}})}a()});';
		$document->addScriptDeclaration($jfkuStickyHeader);
	}
	$template->addScript('js/bootstrap-modal.min.js'); // this is CORE - whatever we need it for future profile page
	if ($template->params->get('jfkuQuickNavPos')) {
		$jfkuQ_N_ModalMinH	= $template->params->get('jfkuQ_N_ModalMinH');
		$jfkuQ_N_ModalMaxH	= $template->params->get('jfkuQ_N_ModalMaxH');
		$jfkuQ_N_ModalMenuSubH	= $template->params->get('jfkuQ_N_ModalMenuSubH');
		$document->addStyleDeclaration('#Kunena .jf_kunena_quicknav{min-height:'.$jfkuQ_N_ModalMinH.';max-height:'.$jfkuQ_N_ModalMaxH.'}#Kunena .jf_ku_modal .moduletable .menu li ul{min-height:'.$jfkuQ_N_ModalMenuSubH.'}');
	}
$template->addScript('js/joomforest.js');
?>
<!--[if lt IE 9]>
<link rel="stylesheet" href="<?php echo $cssurl; ?>/jf_kunena_ie8.css" type="text/css" />
<![endif]-->

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo $cssurl; ?>/kunena.forum.ie7.css" type="text/css" />
<![endif]-->
<?php
$mediaurl = JURI::root(true) . "/components/com_kunena/template/{$template->name}/media";
$jfku_UnlimColors		= $template->params->get('jfku_UnlimColors');
$jfku_UC_MainActive		= $template->params->get('jfku_UC_MainActive');
$jfku_UC_MainInactive	= $template->params->get('jfku_UC_MainInactive');
$jfku_UC_MobileT_gr_t	= $template->params->get('jfku_UC_MobileT_gr_t');
$jfku_UC_MobileT_gr_b	= $template->params->get('jfku_UC_MobileT_gr_b');
if ($jfku_UnlimColors) {
	$styles = <<<EOF
#Kunena #jf_ku_header #ktab li.active a,#Kunena #jf_ku_header #ktab li:hover a,#Kunena #kpost-buttons .kbutton[name="ksubmit"],#Kunena #kpost-buttons .kbutton[name="ksubmit"]:hover,#Kunena .kattachment .kbutton,#Kunena .kattachment .kbutton:hover,#Kunena #kforumsearch input[type="submit"],#Kunena #kforumsearch input[type="submit"]:hover,#Kunena form#jumpto input.kbutton,#Kunena td.krowmoderation input.kbutton,#Kunena form#jumpto input.kbutton:hover,#jf_ku_login .jf_ku_login_content .jf_ku_login_authorization_button{background-color:{$jfku_UC_MainActive}!important}#Kunena #jf_kunena_login #jf_ku_login .jf_ku_login_loggedcont_loader table tr td .section2 a,#Kunena #jf_kunena_login #jf_ku_login .jf_ku_login_loggedcont_loader table tr td .section2 a:hover,#Kunena #jf_ku_header #ktab a span,#Kunena a:link,#Kunena a:hover,#Kunena a:visited,#Kunena a:active,#Kunena a:focus,#Kunena .kforum-pathway .path-element-first a,#Kunena .kforum-pathway .path-element a,#Kunena .jf_ku_modal .moduletable .menu li ul a,.jf_ku_modal .moduletable .menu li ul span{color:{$jfku_UC_MainActive}!important}#Kunena .kpagination span,#Kunena .kpagination a{border-color:{$jfku_UC_MainActive};background-color:{$jfku_UC_MainActive}}#Kunena #kpost-buttons .kbutton[name="cancel"],#Kunena #kpost-buttons .kbutton[name="cancel"]:hover,#Kunena #kforumsearch input[type="reset"],#Kunena #kforumsearch input[type="reset"]:hover,#Kunena #kprofile .jf_ku_prof_attachment .kbutton,#Kunena #kprofile #kaddban .kbutton{background-color:{$jfku_UC_MainInactive}}#jf_ku_mobile_menu{background-color:{$jfku_UC_MobileT_gr_t};background-image:-webkit-gradient(linear,left top,left bottom,from({$jfku_UC_MobileT_gr_t}),to({$jfku_UC_MobileT_gr_b}));background-image:-webkit-linear-gradient(top,{$jfku_UC_MobileT_gr_t},{$jfku_UC_MobileT_gr_b});background-image:-moz-linear-gradient(top,{$jfku_UC_MobileT_gr_t},{$jfku_UC_MobileT_gr_b});background-image:-ms-linear-gradient(top,{$jfku_UC_MobileT_gr_t},{$jfku_UC_MobileT_gr_b});background-image:-o-linear-gradient(top,{$jfku_UC_MobileT_gr_t},{$jfku_UC_MobileT_gr_b});background-image:linear-gradient(top,{$jfku_UC_MobileT_gr_t},{$jfku_UC_MobileT_gr_b})}
EOF;
}

$document->addStyleDeclaration($styles);