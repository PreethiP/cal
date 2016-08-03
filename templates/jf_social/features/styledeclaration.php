<?php
/**
* @version   $Id: styledeclaration.php 3364 2012-09-06 18:54:59Z kevin $
 * @author		RocketTheme http://www.rockettheme.com
 * @copyright 	Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

class GantryFeatureStyleDeclaration extends GantryFeature {
    var $_feature_name = 'styledeclaration';

    function isEnabled() {
        /** @var $gantry Gantry */
		global $gantry;
        $menu_enabled = $this->get('enabled');

        if (1 == (int)$menu_enabled) return true;
        return false;
    }

	function init() {
        /** @var $gantry Gantry */
		global $gantry;
		$browser = $gantry->browser;

        // Colors
        $linkColor = new Color($gantry->get('linkcolor'));
		$css = 'a{color:'.$gantry->get('linkcolor').';}';
        $css .= '.button,.readon,.readmore,button.validate,#member-profile a,#member-registration a,.formelm-buttons button,.btn-primary{border-color:'.$linkColor->darken('20%').';}';

		// jf Main Color 1 - background color
		$css .= '#jf-js-latest-photos-button,#jf-tinycarousel .buttons:hover,.es-nav span:hover,#jf_portfolio_filter li.current a,#jf_portfolio_filter li:hover a,#jf_portfolio_filter li.current a,#jf_portfolio_filter li:hover a,.jf_typo_accord.style4 .jf_typo_accord_trigger,.jf_typo_toggle.style4 .jf_typo_toggle_trigger,#community-wrap .js_dropDownParent li a:hover,#cWindowContentWrap .js_dropDownParent li a:hover,#community-wrap .js_PrivacyOpen .js_dropDownMaster .js_dropDown{background-color:'.$gantry->get('jf_mainColor_1').'}.jf-showcase-mod .jf-showcase-mod-btn:hover,.jf-recent-projects:hover .jf-recent-projects-title .jf-recent-projects-title-l,.jf-recent-projects:hover .jf-recent-projects-title .jf-recent-projects-title-r,.jf-our-friends:hover .jf-our-friends-title .jf-our-friends-title-l,.jf-our-friends:hover .jf-our-friends-title .jf-our-friends-title-r,#jf-login .jf-login-content .jf-login-authorization-button:hover,.component-content .item-page .pagenav li,.button:hover,.readon:hover,.readmore:hover,button.validate:hover,#member-profile a:hover,#member-registration a:hover,.formelm-buttons button:hover,.btn-primary:hover,.button,.readon,.readmore,button.validate,#member-profile a,#member-registration a,.formelm-buttons button,.btn-primary,.button:active,.readon:active,.readmore:active,button.validate:active,#member-profile a:active,#member-registration a:active,.formelm-buttons button:active,.btn-primary:active,.jf_typo_simple_tabs.style4 ul.tabs li.active a,table.jf_typo_table.style3 thead tr th,table.jf_typo_table.style4 thead tr th,div.jf-k2-ItemReadMore a,div.k2TagCloudBlock a:hover,div.k2LoginBlock fieldset.input input.button,div.k2LoginBlock fieldset.input input.button:hover,.nspArt .readon,.nspArt .readon:hover,.nspArt .readon:active,div.subCategory .subCategoryMore:hover,.jf-k2-TagsBlock a:hover,.itemComments:hover .jf-k2-comment-separator,div.itemComments ul.itemCommentsList li span.commentLink a:hover,.itemComments:hover .jf-k2-comment-separator,div.itemCommentsForm form input#submitCommentButton,div.itemBackToTop a:hover,.component-content .pagination ul li a:hover{background:'.$gantry->get('jf_mainColor_1').'}#jf-logomodalcontent .jf-logomenu-title,#jf_circlecolor,#rt-breadcrumbs .breadcrumbs a,#rt-breadcrumbs .breadcrumbs a:hover,.jf_typo_simple_tabs ul.tabs li.active a,.jf_typo_accord_trigger,div.k2TagCloudBlock a,div.itemComments ul.itemCommentsList li span.commentLink a{color:'.$gantry->get('jf_mainColor_1').'!important}div.itemAuthorLatest,div.itemRelated,.camera_caption>div,.jf_typo_title,#rt-showcase .rt-container .rt-grid-1:hover,#rt-showcase .rt-container .rt-grid-2:hover,#rt-showcase .rt-container .rt-grid-3:hover,#rt-showcase .rt-container .rt-grid-4:hover,#rt-showcase .rt-container .rt-grid-5:hover,#rt-showcase .rt-container .rt-grid-6:hover,#rt-showcase .rt-container .rt-grid-12:hover{border-color:'.$gantry->get('jf_mainColor_1').'}.jf_typo_simple_tabs ul.tabs li.active,.jf_typo_simple_tabs.style2 ul.tabs li.active,.jf_typo_simple_tabs.style3 ul.tabs li.active{border-top:2px solid '.$gantry->get('jf_mainColor_1').'}.jf_typo_accord_trigger{border-left:2px solid '.$gantry->get('jf_mainColor_1').'}.jf_typo_toggle.style1 .jf_typo_toggle_trigger,.jf_typo_toggle.style1 .jf_typo_toggle_trigger:hover,.jf_typo_toggle.style2 .jf_typo_toggle_trigger,.jf_typo_toggle.style2 .jf_typo_toggle_trigger:hover,.jf_typo_toggle.style3 .jf_typo_toggle_trigger,.jf_typo_toggle.style3 .jf_typo_toggle_trigger:hover{border-left:3px solid '.$gantry->get('jf_mainColor_1').'}div.k2UserBlock form input.ubLogout,div.k2UserBlock form input.ubLogout:hover,div.k2UserBlock form input.ubLogout:active{background:'.$gantry->get('jf_mainColor_1').'}';
		// jf Main Color 2 - background color
		$css .= '.jf-portfolio-item .jf-portfolio-title-border{background:'.$gantry->get('jf_mainColor_2').'}';
		// jf Main Color 3 - background color
		$css .= '#jf-login .jf-login-content .jf-login-authorization-button{background:'.$gantry->get('jf_mainColor_3').'}';
		// jf Main Color 4 - background color
		$css .= '.jf_typo_gallery li a .mask .mask-content .border{background:'.$gantry->get('jf_mainColor_4').'}';
		// jf Main Color 5 - background color
		$css .= '.jf-blog-item-author .author a,.jf-blog-item-category div.category a{color:'.$gantry->get('jf_mainColor_5').'}.jf-blog-item-author a:hover,.jf-blog-item-category div.category a:hover{color:'.$gantry->get('jf_mainColor_5').';text-shadow:0 0 5px '.$gantry->get('jf_mainColor_5').'}.jf-portfolio-item-readmore a{color:'.$gantry->get('jf_mainColor_5').'}.jf-portfolio-item-readmore a:hover{color:'.$gantry->get('jf_mainColor_5').';text-shadow:0 0 5px '.$gantry->get('jf_mainColor_5').'}.jf-k2-item-author .catItemAuthor a,.jf-k2-item-category div.jf-k2-catItemCategory a{color:'.$gantry->get('jf_mainColor_5').'}.jf-k2-item-author a:hover{color:'.$gantry->get('jf_mainColor_5').';text-shadow:0 0 5px '.$gantry->get('jf_mainColor_5').'}';
		// jf Main Color 6 - background color
		$css .= 'div.subCategory h2 a:hover{color:'.$gantry->get('jf_mainColor_6').'}.jf_typo_accord.style4 .jf_typo_accord_trigger:hover{background-color:'.$gantry->get('jf_mainColor_6').'}.jf_typo_toggle.style4 .jf_typo_toggle_trigger:hover{background-color:'.$gantry->get('jf_mainColor_6').'}';
		// jf Main Color 7 - background color
		$css .= '.menutop li.root.active,.menutop li.root:hover{border-top:4px solid '.$gantry->get('jf_mainColor_7').'}.menutop ul li.parent>.item:hover{border-right:7px solid '.$gantry->get('jf_mainColor_7').'}.menutop .fusion-submenu-wrapper li.active a,.menutop .fusion-submenu-wrapper li.parent.active{border-right:5px solid '.$gantry->get('jf_mainColor_7').'}.menutop ul li>.item:hover{border-right:5px solid '.$gantry->get('jf_mainColor_7').'}';
		// jf Main Color 8 - background color
		$css .= '.jf-recent-projects .jf-recent-projects-viewall a:hover{background:'.$gantry->get('jf_mainColor_8').'}';
		// jf Main Color 9 (1,2,3)
		$css .= '#jf-login .jf-login-greeting{background-color:'.$gantry->get('jf_mainColor_91').';background-image:-webkit-gradient(linear,left top,left bottom,from('.$gantry->get('jf_mainColor_91').'),to('.$gantry->get('jf_mainColor_92').'));background-image:-webkit-linear-gradient(top,'.$gantry->get('jf_mainColor_91').','.$gantry->get('jf_mainColor_92').');background-image:-moz-linear-gradient(top,'.$gantry->get('jf_mainColor_91').','.$gantry->get('jf_mainColor_92').');background-image:-ms-linear-gradient(top,'.$gantry->get('jf_mainColor_91').','.$gantry->get('jf_mainColor_92').');background-image:-o-linear-gradient(top,'.$gantry->get('jf_mainColor_91').','.$gantry->get('jf_mainColor_92').');background-image:linear-gradient(top,'.$gantry->get('jf_mainColor_91').','.$gantry->get('jf_mainColor_92').');border:1px solid '.$gantry->get('jf_mainColor_93').'}';

		// jf footer - background color
		$css .= 'footer#rt-footer-surround{background-color:'.$gantry->get('jf_footerBGColor').';}';
		// jf footer - menu link color
		$css .= '#rt-footer ul.menu li a,#rt-footer ul.menu li span{color:'.$gantry->get('jf_footerMenuLinkColor').';}';
		// jf footer - menu link hover color
		$css .= '#rt-footer ul.menu li a:hover,#rt-footer ul.menu li span:hover{color:'.$gantry->get('jf_footerMenuLinkHoverColor').';}';
		// jf footer - Quovolve Color
		$css .= '.quovolve-box ul.quovolve{color:'.$gantry->get('jf_footerQuovolve').';}';
		// jf footer - Recent tweets text color
		$css .= '#jf_recent_tweets #twitter_update_list li{color:'.$gantry->get('jf_footerRecentTweetsTxt').';}';
		// jf footer - Recent tweets Link color
		$css .= '#jf_recent_tweets #twitter_update_list li a{color:'.$gantry->get('jf_footerRecentTweetsLink').';}';
		// jf footer - Recent tweets Link Hover color
		$css .= '#jf_recent_tweets #twitter_update_list li a:hover{color:'.$gantry->get('jf_footerRecentTweetsLinkH').';}';
		// jf footer - CopyRight Text color
		$css .= '#rt-copyright .rt-container .rt-block{color:'.$gantry->get('jf_footerCRTxt').';}';
		// jf footer - CopyRight Text Hover color
		$css .= '#rt-copyright .rt-container .rt-block:hover{color:'.$gantry->get('jf_footerCRTxtH').';}';
		
		
		// JOMSOCIAL Theme ovverride
		if ($gantry->get('jfjs_override')) {
			//JF JS Main Color 1
			$css .= '#community-wrap .button,body #community-wrap a.active-state,#community-wrap .jf-user-apps .app-box-header,#community-wrap .cGroup-Events .event-date div,#community-wrap .community-events-results-left,#community-wrap.cEvents .cSlider .cSlider-nav-clip ul li .cEventDate,#community-wrap .community-calendar.cModule div.calendar-month,#community-wrap .community-calendar.cModule span.calendar-month,#community-wrap .jf-comment-btn,.jf-js-latestmembers-show-all:hover{background:'.$gantry->get('jfjs_mainColor_1').'}#community-wrap .community-status .button,#cWindowAction .buttonm,#jf-js-login .jf-js-login-content .jf-js-login-authorization-button,#jf-js-login .jf-js-login-content .jf-js-login-authorization-button:hover{background:'.$gantry->get('jfjs_mainColor_1').'!important}#community-wrap .cCategories .cCount,body #community-wrap .jf-alreadyfriends,.jf-js-latestmembers-ul li div.jf-js-latestmembers-title-tooltip span{background-color:'.$gantry->get('jfjs_mainColor_1').'!important}#jsMenu .jsMenuBar a,#community-wrap.cGroups .cIndex #cFeatured .cGroupsMain .cGroupInfo .cFeaturedTitle a,#community-wrap.cGroups .cIndex #cFeatured .cSlider ul li .cFeaturedTitle a,#community-wrap.cPhotos .cIndex #cFeatured .cFeaturedAlbums .cFeaturedTitle a,#community-wrap.cEvents #cFeatured #event-title,#jf-js-login .jf-js-login-loggedcont.s-jf-js-login-v .jf-js-login-loggedcont-loader table tr td .section2 .section2-prof a,#jf-js-login .jf-js-login-loggedcont.s-jf-js-login-v .jf-js-login-loggedcont-loader table tr td .section2 .section2-acc-pri a{color:'.$gantry->get('jfjs_mainColor_1').'}#community-wrap .cFeed-item .newsfeed-avatar a:hover,.cFeed-item .newsfeed-avatar a:hover,#community-wrap .js_PrivacyOpen .js_dropDownMaster .js_dropDown,#community-wrap.cEvents .cSlider .cSlider-nav-clip ul li,#community-wrap .cGroup-Events .event-date{border-color:'.$gantry->get('jfjs_mainColor_1').'}#community-wrap .community-status .creator a:hover{color:'.$gantry->get('jfjs_mainColor_1').'!important}.jf-js-latestmembers-ul li a:hover{border-color:'.$gantry->get('jfjs_mainColor_1').'}';
			//JF JS Main Color 2
			$css .= '#community-wrap .button:hover,#community-wrap .latest-events .jsMM,#jsMenu .jsMenuBar li ul{background:'.$gantry->get('jfjs_mainColor_2').'}#community-wrap .community-status .button:hover,#community-wrap #community-event-option,#community-wrap #community-group-admin,#community-wrap .cTabsBar ul li.cTabCurrent a,#community-wrap .cTabsBar ul li a:hover,#community-wrap .cTabsBar ul li a:focus,#cWindowAction .button:hover{background:'.$gantry->get('jfjs_mainColor_2').'!important}#jsMenu .jsMenuBar li ul a:focus,#jsMenu .jsMenuBar li:hover a,#jsMenu .jsMenuBar li a.active,#jsMenu .jsMenuBar li ul a:hover,#like-container .meLike:hover,.qtip-title,#jsMenu .jsHome:hover,#jsMenu .jsIr.isActive,#jsMenu .jsMenuIcon div a:hover{background-color:'.$gantry->get('jfjs_mainColor_2').'!important}#community-wrap a,#community-wrap .cSubmenu li a{color:'.$gantry->get('jfjs_mainColor_2').'}#community-wrap .latest-events .jsEvDate{border-color:'.$gantry->get('jfjs_mainColor_2').'}#community-wrap .cFeed-item .newsfeed-content a{color:'.$gantry->get('jfjs_mainColor_2').'!important}#jsMenu .jsMenuBar li:hover ul li a:hover{color:'.$gantry->get('jfjs_mainColor_2').'!important;background:#fff!important}#community-wrap #community-group-admin h3,#community-wrap #community-event-option h3{border-color:'.$gantry->get('jfjs_mainColor_2').'!important}div.jf-js-flex-caption.jf-js-register:hover{background:'.$gantry->get('jfjs_mainColor_2').'!important}#community-wrap .innerpgbar,.innerpgbar{background:'.$gantry->get('jfjs_mainColor_2').';background:-moz-linear-gradient(center top,'.$gantry->get('jfjs_mainColor_2').' 5%,'.$gantry->get('jfjs_mainColor_2').' 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="'.$gantry->get('jfjs_mainColor_2').'",endColorstr="'.$gantry->get('jfjs_mainColor_2').'");background-color:'.$gantry->get('jfjs_mainColor_2').'}#community-wrap .jf-mob-side-toggl:hover{background-color:'.$gantry->get('jfjs_mainColor_2').'!important}';
			//JF JS Main Color 3
			$css .= '#community-wrap .latest-events .jsDD{color:'.$gantry->get('jfjs_mainColor_3').'}';
			//JF JS Main Color 4
			$css .= '#jsMenu .jsLogOff a:hover{background-color:'.$gantry->get('jfjs_mainColor_4').'!important}';
			//JF JS Main Color 5
			$css .= '#jf-js-login .jf-js-login-loggedcont .logout .button:hover{background:'.$gantry->get('jfjs_mainColor_5').'!important}';
			//JF JS Main Color 6
			$css .= '#community-wrap .jsFriendList:hover .jsFriendRespond input{background:'.$gantry->get('jfjs_mainColor_6').'!important;border-color:'.$gantry->get('jfjs_mainColor_6').'!important}';
			//JF JS Main Color 7
			$css .= '#community-wrap #community-event-option .event-menus li a,#community-wrap #community-group-admin .group-menus li a{border-bottom:1px dashed '.$gantry->get('jfjs_mainColor_7').'!important;border-top:1px dashed '.$gantry->get('jfjs_mainColor_7').'!important}';
			//JF JS Main Color 8 (1,2,3)
			$css .= '#jf-js-login .jf-js-login-greeting{background-color:'.$gantry->get('jfjs_mainColor_81').';background-image:-webkit-gradient(linear,left top,left bottom,from('.$gantry->get('jfjs_mainColor_81').'),to('.$gantry->get('jfjs_mainColor_82').'));background-image:-webkit-linear-gradient(top,'.$gantry->get('jfjs_mainColor_81').','.$gantry->get('jfjs_mainColor_82').');background-image:-moz-linear-gradient(top,'.$gantry->get('jfjs_mainColor_81').','.$gantry->get('jfjs_mainColor_82').');background-image:-ms-linear-gradient(top,'.$gantry->get('jfjs_mainColor_81').','.$gantry->get('jfjs_mainColor_82').');background-image:-o-linear-gradient(top,'.$gantry->get('jfjs_mainColor_81').','.$gantry->get('jfjs_mainColor_82').');background-image:linear-gradient(top,'.$gantry->get('jfjs_mainColor_81').','.$gantry->get('jfjs_mainColor_82').');border:1px solid '.$gantry->get('jfjs_mainColor_83').'}';
			//JF JS Main Color 9 (1,2)
			$css .= '#jf-mobile-menu{background-color:'.$gantry->get('jfjs_mainColor_91').'!important;background-image:-webkit-gradient(linear,left top,left bottom,from('.$gantry->get('jfjs_mainColor_91').'),to('.$gantry->get('jfjs_mainColor_92').'))!important;background-image:-webkit-linear-gradient(top,'.$gantry->get('jfjs_mainColor_91').','.$gantry->get('jfjs_mainColor_92').')!important;background-image:-moz-linear-gradient(top,'.$gantry->get('jfjs_mainColor_91').','.$gantry->get('jfjs_mainColor_92').')!important;background-image:-ms-linear-gradient(top,'.$gantry->get('jfjs_mainColor_91').','.$gantry->get('jfjs_mainColor_92').')!important;background-image:-o-linear-gradient(top,'.$gantry->get('jfjs_mainColor_91').','.$gantry->get('jfjs_mainColor_92').')!important;background-image:linear-gradient(top,'.$gantry->get('jfjs_mainColor_91').','.$gantry->get('jfjs_mainColor_92').')!important}';
		}
		
		// KUNENA Theme ovverride
		if ($gantry->get('jfku_override')) {
			//JF KU Main Color 1
			$css .= '#Kunena #jf_ku_header #ktab li.active a,#Kunena #jf_ku_header #ktab li:hover a,#Kunena #kpost-buttons .kbutton[name="ksubmit"],#Kunena #kpost-buttons .kbutton[name="ksubmit"]:hover,#Kunena .kattachment .kbutton,#Kunena .kattachment .kbutton:hover,#Kunena #kforumsearch input[type="submit"],#Kunena #kforumsearch input[type="submit"]:hover,#Kunena form#jumpto input.kbutton,#Kunena td.krowmoderation input.kbutton,#Kunena form#jumpto input.kbutton:hover,#jf_ku_login .jf_ku_login_content .jf_ku_login_authorization_button{background-color:'.$gantry->get('jfku_mainColor_1').'!important}#Kunena #jf_kunena_login #jf_ku_login .jf_ku_login_loggedcont_loader table tr td .section2 a,#Kunena #jf_kunena_login #jf_ku_login .jf_ku_login_loggedcont_loader table tr td .section2 a:hover,#Kunena #jf_ku_header #ktab a span,#Kunena a:link,#Kunena a:hover,#Kunena a:visited,#Kunena a:active,#Kunena a:focus,#Kunena .kforum-pathway .path-element-first a,#Kunena .kforum-pathway .path-element a,#Kunena .jf_ku_modal .moduletable .menu li ul a,.jf_ku_modal .moduletable .menu li ul span{color:'.$gantry->get('jfku_mainColor_1').'!important}#Kunena .kpagination span,#Kunena .kpagination a{border-color:'.$gantry->get('jfku_mainColor_1').';background-color:'.$gantry->get('jfku_mainColor_1').'}';
			//JF KU Main Color 2
			$css .= '#Kunena #kpost-buttons .kbutton[name="cancel"],#Kunena #kpost-buttons .kbutton[name="cancel"]:hover,#Kunena #kforumsearch input[type="reset"],#Kunena #kforumsearch input[type="reset"]:hover,#Kunena #kprofile .jf_ku_prof_attachment .kbutton,#Kunena #kprofile #kaddban .kbutton{background-color:'.$gantry->get('jfku_mainColor_2').'}';
			//JF KU Main Color 3 (1,2)
			$css .= '#jf_ku_mobile_menu{background-color:'.$gantry->get('jfku_mainColor_31').';background-image:-webkit-gradient(linear,left top,left bottom,from('.$gantry->get('jfku_mainColor_31').'),to('.$gantry->get('jfku_mainColor_32').'));background-image:-webkit-linear-gradient(top,'.$gantry->get('jfku_mainColor_31').','.$gantry->get('jfku_mainColor_32').');background-image:-moz-linear-gradient(top,'.$gantry->get('jfku_mainColor_31').','.$gantry->get('jfku_mainColor_32').');background-image:-ms-linear-gradient(top,'.$gantry->get('jfku_mainColor_31').','.$gantry->get('jfku_mainColor_32').');background-image:-o-linear-gradient(top,'.$gantry->get('jfku_mainColor_31').','.$gantry->get('jfku_mainColor_32').');background-image:linear-gradient(top,'.$gantry->get('jfku_mainColor_31').','.$gantry->get('jfku_mainColor_32').')}';
		}

		/* 
        // Gradients
        $css .= '.button, .readon, .readmore, button.validate, #member-profile a, #member-registration a, .formelm-buttons button, .btn-primary {background-color: '.$linkColor->lighten('4%').'; '.$this->_createGradient('top', $linkColor->lighten('4%'), '1', '0%', $linkColor->darken('9%'), '1', '100%').'}'."\n";
        $css .= '.button:hover, .readon:hover, .readmore:hover, button.validate:hover, #member-profile a:hover, #member-registration a:hover, .formelm-buttons button:hover, .btn-primary:hover {background-color: '.$linkColor->lighten('10%').'; '.$this->_createGradient('top', $linkColor->lighten('10%'), '1', '0%', $linkColor->darken('3%'), '1', '100%').'}'."\n";
        $css .= '.button:active, .readon:active, .readmore:active, button.validate:active, #member-profile a:active, #member-registration a:active, .formelm-buttons button:active, .btn-primary:active {background-color: '.$linkColor->darken('2%').'; '.$this->_createGradient('top', $linkColor->darken('2%'), '1', '0%', $linkColor->lighten('8%'), '1', '100%').'}'."\n";
		*/
        // Logo
        $css .= $this->buildLogo();

	    $this->_disableRokBoxForiPhone();

        $gantry->addInlineStyle($css);
		
        if ($gantry->get('layout-mode')=="responsive") $gantry->addLess('mediaqueries.less');
		if ($gantry->get('layout-mode')=="responsive960") $gantry->addLess('mediaqueries.less');
		if ($gantry->get('layout-mode')=="responsive960") $gantry->addStyle('jf-grid-responsive960.css');
        if ($gantry->get('layout-mode')=="960fixed") $gantry->addLess('960fixed.less');
        if ($gantry->get('layout-mode')=="1200fixed") $gantry->addLess('1200fixed.less');

	}

    function buildLogo(){
        /** @var $gantry Gantry */
		global $gantry;

        if ($gantry->get('logo-type')!="custom") return "";

        $source = $width = $height = "";

        $logo = str_replace("&quot;", '"', str_replace("'", '"', $gantry->get('logo-custom-image')));
        $data = json_decode($logo);

        if (!$data){
            if (strlen($logo)) $source = $logo;
            else return "";
        } else {
            $source = $data->path;
        }

        if (substr($gantry->baseUrl, 0, strlen($gantry->baseUrl)) == substr($source, 0, strlen($gantry->baseUrl))){
            $file = JPATH_ROOT . '/' . substr($source, strlen($gantry->baseUrl));
        } else {
            $file = JPATH_ROOT . '/' . $source;
        }

        if (isset($data->width) && isset($data->height)){
            $width = $data->width;
            $height = $data->height;
        } else {
            $size = @getimagesize($file);
            $width = $size[0];
            $height = $size[1];
        }

        if (!preg_match('/^\//', $source))
        {
            $source = JURI::root(true).'/'.$source;
        }

        $output = "";
        $output .= "#jf-logo-image {background: url(".$source.") 0 50% no-repeat !important;}"."\n";
        $output .= "#jf-logo-image {width: ".$width."px;height: ".$height."px;}"."\n";

        $file = preg_replace('/\//i', DIRECTORY_SEPARATOR, $file);

        return (file_exists($file)) ?$output : '';
    }

    function _createGradient($direction, $from, $fromOpacity, $fromPercent, $to, $toOpacity, $toPercent){
        /** @var $gantry Gantry */
		global $gantry;
        $browser = $gantry->browser;

        $fromColor = $this->_RGBA($from, $fromOpacity);
        $toColor = $this->_RGBA($to, $toOpacity);
        $gradient = $default_gradient = '';

        $default_gradient = 'background: linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';

        switch ($browser->engine) {
            case 'gecko':
                $gradient = ' background: -moz-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                break;

            case 'webkit':
                if ($browser->shortversion < '5.1'){

                    switch ($direction){
                        case 'top':
                            $from_dir = 'left top'; $to_dir = 'left bottom'; break;
                        case 'bottom':
                            $from_dir = 'left bottom'; $to_dir = 'left top'; break;
                        case 'left':
                            $from_dir = 'left top'; $to_dir = 'right top'; break;
                        case 'right':
                            $from_dir = 'right top'; $to_dir = 'left top'; break;
                    }
                    $gradient = ' background: -webkit-gradient(linear, '.$from_dir.', '.$to_dir.', color-stop('.$fromPercent.','.$fromColor.'), color-stop('.$toPercent.','.$toColor.'));';
                } else {
                    $gradient = ' background: -webkit-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                }
                break;

            case 'presto':
                $gradient = ' background: -o-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                break;

            case 'trident':
                if ($browser->shortversion >= '10'){
                    $gradient = ' background: -ms-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                } else if ($browser->shortversion <= '6'){
                    $gradient = $from;
                    $default_gradient = '';
                } else {

                    $gradient_type = ($direction == 'left' || $direction == 'right') ? 1 : 0;
                    $from_nohash = str_replace('#', '', $from);
                    $to_nohash = str_replace('#', '', $to);

                    if (strlen($from_nohash) == 3) $from_nohash = str_repeat(substr($from_nohash, 0, 1), 6);
                    if (strlen($to_nohash) == 3) $to_nohash = str_repeat(substr($to_nohash, 0, 1), 6);

                    if ($fromOpacity == 0 || $fromOpacity == '0' || $fromOpacity == '0%') $from_nohash = '00' . $from_nohash;
                    if ($toOpacity == 0 || $toOpacity == '0' || $toOpacity == '0%') $to_nohash = '00' . $to_nohash;

                    $gradient = " filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#".$to_nohash."', endColorstr='#".$from_nohash."',GradientType=".$gradient_type." );";

                    $default_gradient = '';

                }
                break;

            default:
                $gradient = $from;
                $default_gradient = '';
                break;
        }

        return  $default_gradient . $gradient;
    }

    function _HEX2RGB($hexStr, $returnAsString = false, $seperator = ','){
        $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr);
        $rgbArray = array();

        if (strlen($hexStr) == 6){
            $colorVal = hexdec($hexStr);
            $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
            $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
            $rgbArray['blue'] = 0xFF & $colorVal;
        } elseif (strlen($hexStr) == 3){
            $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
            $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
            $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
        } else {
            return false;
        }

        return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray;
    }

    function _RGBA($hex, $opacity){
        return 'rgba(' . $this->_HEX2RGB($hex, true) . ','.$opacity.')';
    }

	function _disableRokBoxForiPhone() {
		/** @var $gantry Gantry */
		global $gantry;

		if ($gantry->browser->platform == 'iphone' || $gantry->browser->platform == 'android') {
			$gantry->addInlineScript("window.addEvent('domready', function() {\$\$('a[rel^=rokbox]').removeEvents('click');});");
		}
	}
}
