<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		1.0 _ 08.10.12
 * @author		JoomForest http://www.joomforest.com
 * @copyright 	Copyright (C) 2011 - 2012 JoomForest.com
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined('JPATH_BASE') or die();
gantry_import('core.gantryfeature');
/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureJfFontSize extends GantryFeature {
    var $_feature_name = 'jf_fontsize';
	
	function isInPosition($position) {
		return false;
	}
	
	function init() {
		global $gantry, $option;
        if ($this->get('enabled')) {
			
			// FontSize - Menu
			/* 1 */ $jf_menuParentSize = $this->get('jf_menuParentSize');
			/* 2 */ $jf_menuParentTransformSize = $this->get('jf_menuParentTransformSize');
			/* 3 */ $jf_menuChildSize = $this->get('jf_menuChildSize');
			/* 4 */ $jf_menuChildTransformSize = $this->get('jf_menuChildTransformSize');
			/* 5 */ $jf_tipsyTooltipSize = $this->get('jf_tipsyTooltipSize');
			/* 6 */ $jf_fastNavTitleSize = $this->get('jf_fastNavTitleSize');
			/* 7 */ $jf_jfLoginTitleSize = $this->get('jf_jfLoginTitleSize');
			/* 8 */ $jf_jfLoginInputSize = $this->get('jf_jfLoginInputSize');
			/* 9 */ $jf_jfLoginRememberSize = $this->get('jf_jfLoginRememberSize');
		   /* 10 */ $jf_jfLoginForgotSize = $this->get('jf_jfLoginForgotSize');
		   /* 11 */ $jf_jfLoginRegisterSize = $this->get('jf_jfLoginRegisterSize');
		   /* 12 */ $jf_jfLoginGreetingSize = $this->get('jf_jfLoginGreetingSize');
		   /* 13 */ $jf_jfLoginLogoutSize = $this->get('jf_jfLoginLogoutSize');
		   /* 14 */ $jf_jfSearchInputSize = $this->get('jf_jfSearchInputSize');
		   /* 15 */ $jf_showCaseTitleSize = $this->get('jf_showCaseTitleSize');
		   /* 16 */ $jf_showcaseButtonSize = $this->get('jf_showcaseButtonSize');
		   /* 17 */ $jf_tinyCarouselListSize = $this->get('jf_tinyCarouselListSize');
		   /* 18 */ $jf_tinyCarouselWelcomeTitleSize = $this->get('jf_tinyCarouselWelcomeTitleSize');
		   /* 19 */ $jf_tinyCarouselWelcomeDescrSize = $this->get('jf_tinyCarouselWelcomeDescrSize');
		   /* 20 */ $jf_recentProjectsTitleSize = $this->get('jf_recentProjectsTitleSize');
		   /* 21 */ $jf_recentProjectsItemTitleSize = $this->get('jf_recentProjectsItemTitleSize');
		   /* 22 */ $jf_recentProjectsButtonSize = $this->get('jf_recentProjectsButtonSize');
		   /* 23 */ $jf_ourFriendsTitleSize = $this->get('jf_ourFriendsTitleSize');
		   /* 24 */ $jf_ourFriendsMainDescrSize = $this->get('jf_ourFriendsMainDescrSize');
		   /* 25 */ $jf_recentTweetsTextSize = $this->get('jf_recentTweetsTextSize');
		   /* 26 */ $jf_recentTweetsLinkSize = $this->get('jf_recentTweetsLinkSize');
		   /* 27 */ $jf_moduleTitleSize = $this->get('jf_moduleTitleSize');
		   /* 28 */ $jf_footerMenuSize = $this->get('jf_footerMenuSize');
		   /* 29 */ $jf_articleTitleSize = $this->get('jf_articleTitleSize');
		   /* 30 */ $jf_breadCrumbSize = $this->get('jf_breadCrumbSize');
		   /* 31 */ $jf_articleDateSize = $this->get('jf_articleDateSize');
		   /* 32 */ $jf_articleAuthorSize = $this->get('jf_articleAuthorSize');
		   /* 33 */ $jf_articleCategorySize = $this->get('jf_articleCategorySize');
		   /* 34 */ $jf_articleReadMoreSize = $this->get('jf_articleReadMoreSize');
		   /* 35 */ $jf_articlePageNavSize = $this->get('jf_articlePageNavSize');
		   /* 36 */ $jf_paginationCounterSize = $this->get('jf_paginationCounterSize');
		   /* 37 */ $jf_paginationNavigationsSize = $this->get('jf_paginationNavigationsSize');
		   /* 38 */ $jf_rightMenuSize = $this->get('jf_rightMenuSize');
		   /* 39 */ $jf_rightLoginFormLabelSize = $this->get('jf_rightLoginFormLabelSize');
		   /* 40 */ $jf_rightLoginFormLinkSize = $this->get('jf_rightLoginFormLinkSize');
		   /* 41 */ $jf_rightSearchInputSize = $this->get('jf_rightSearchInputSize');
		   /* 42 */ $jf_contactInfoModuleSize = $this->get('jf_contactInfoModuleSize');
		   /* 43 */ $jf_contactPageTextSize = $this->get('jf_contactPageTextSize');
		   /* 44 */ $jf_buttonsSize = $this->get('jf_buttonsSize');
		   /* 45 */ $jf_portfolioFilterSize = $this->get('jf_portfolioFilterSize');
		   /* 46 */ $jf_portfolioItemTitleSize = $this->get('jf_portfolioItemTitleSize');
		   /* 47 */ $jf_portfolioItemReadmoreSize = $this->get('jf_portfolioItemReadmoreSize');
		   /* 48 */ $jf_galleryItemTitleSize = $this->get('jf_galleryItemTitleSize');
		   /* 49 */ $jf_galleryItemTitleLSSize = $this->get('jf_galleryItemTitleLSSize');
		   /* 50 */ $jf_pricingTableTitleSize = $this->get('jf_pricingTableTitleSize');
		   /* 51 */ $jf_pricingTableCostSize = $this->get('jf_pricingTableCostSize');
		   /* 52 */ $jf_pricingTableCostIntSize = $this->get('jf_pricingTableCostIntSize');
		   /* 53 */ $jf_pricingTableFeatListSize = $this->get('jf_pricingTableFeatListSize');
		   /* 54 */ $jf_pricingTablePurchBtnSize = $this->get('jf_pricingTablePurchBtnSize');
		   /* 55 */ $jf_typoDropcapsCapitLetSize = $this->get('jf_typoDropcapsCapitLetSize');
		   /* 56 */ $jf_typoBlockquotesSize = $this->get('jf_typoBlockquotesSize');
		   /* 57 */ $jf_typoButtonsize1Size = $this->get('jf_typoButtonsize1Size');
		   /* 58 */ $jf_typoButtonsize2Size = $this->get('jf_typoButtonsize2Size');
		   /* 59 */ $jf_typoButtonsize3Size = $this->get('jf_typoButtonsize3Size');
		   /* 60 */ $jf_typoButtonsize4Size = $this->get('jf_typoButtonsize4Size');
		   /* 61 */ $jf_typoButtonsize5Size = $this->get('jf_typoButtonsize5Size');
		   /* 62 */ $jf_typoTabsButtonSize = $this->get('jf_typoTabsButtonSize');
		   /* 63 */ $jf_typoAccordTrigSize = $this->get('jf_typoAccordTrigSize');
		   /* 64 */ $jf_typoToggleTrigSize = $this->get('jf_typoToggleTrigSize');
		   /* 65 */ $jf_typoTableTitleSize = $this->get('jf_typoTableTitleSize');
		   /* 66 */ $jf_typoSpecialBoxesTextSize = $this->get('jf_typoSpecialBoxesTextSize');
		   /* 67 */ $jf_typoSpecialBoxesCloseSize = $this->get('jf_typoSpecialBoxesCloseSize');
		   /* 68 */ $jf_k2ItemTitleSize = $this->get('jf_k2ItemTitleSize');
		   /* 69 */ $jf_k2ItemFeaturedTitleSize = $this->get('jf_k2ItemFeaturedTitleSize');
		   /* 70 */ $jf_k2ItemToolsTextSize = $this->get('jf_k2ItemToolsTextSize');
		   /* 71 */ $jf_k2ItemRatingTextSize = $this->get('jf_k2ItemRatingTextSize');
		   /* 72 */ $jf_k2ItemDateSize = $this->get('jf_k2ItemDateSize');
		   /* 73 */ $jf_k2ItemAuthorSize = $this->get('jf_k2ItemAuthorSize');
		   /* 74 */ $jf_k2ItemCategorySize = $this->get('jf_k2ItemCategorySize');
		   /* 75 */ $jf_k2ItemViewsSize = $this->get('jf_k2ItemViewsSize');
		   /* 76 */ $jf_k2ItemContentFooterSize = $this->get('jf_k2ItemContentFooterSize');
		   /* 77 */ $jf_k2ItemTagsSize = $this->get('jf_k2ItemTagsSize');
		   /* 78 */ $jf_k2ItemAuthorInfoSize = $this->get('jf_k2ItemAuthorInfoSize');
		   /* 79 */ $jf_k2ItemAuthorLatestSize = $this->get('jf_k2ItemAuthorLatestSize');
		   /* 80 */ $jf_k2ItemNavigationSize = $this->get('jf_k2ItemNavigationSize');
		   /* 81 */ $jf_k2ItemCommentDateSize = $this->get('jf_k2ItemCommentDateSize');
		   /* 82 */ $jf_k2ItemCommentAuthorSize = $this->get('jf_k2ItemCommentAuthorSize');
		   /* 83 */ $jf_k2ItemCommentLinkSize = $this->get('jf_k2ItemCommentLinkSize');
		   /* 84 */ $jf_k2ItemCommentTextSize = $this->get('jf_k2ItemCommentTextSize');
		   /* 85 */ $jf_k2ItemLeaveComntDecrSize = $this->get('jf_k2ItemLeaveComntDecrSize');
		   /* 86 */ $jf_k2ItemLeaveComntLabelSize = $this->get('jf_k2ItemLeaveComntLabelSize');
		   /* 87 */ $jf_k2ItemLeaveComntInputSize = $this->get('jf_k2ItemLeaveComntInputSize');
		   /* 88 */ $jf_k2ItemLeaveComntBtnSize = $this->get('jf_k2ItemLeaveComntBtnSize');
		   /* 89 */ $jf_k2ItemBackToTopBtnSize = $this->get('jf_k2ItemBackToTopBtnSize');
		   /* 90 */ $jf_k2CategoryCmntLinkSize = $this->get('jf_k2CategoryCmntLinkSize');
		   /* 91 */ $jf_k2CategoryReadMoreSize = $this->get('jf_k2CategoryReadMoreSize');
		   /* 92 */ $jf_k2CategoryNavigationSize = $this->get('jf_k2CategoryNavigationSize');
		   /* 93 */ $jf_k2CategoryPaginationSize = $this->get('jf_k2CategoryPaginationSize');
		   /* 94 */ $jf_k2ModLatestBlogsTitleSize = $this->get('jf_k2ModLatestBlogsTitleSize');
		   /* 95 */ $jf_k2ModLatestBlogsInfoSize = $this->get('jf_k2ModLatestBlogsInfoSize');
		   /* 96 */ $jf_k2ModLatestBlogsTextSize = $this->get('jf_k2ModLatestBlogsTextSize');
		   /* 97 */ $jf_k2ModLatestBlogsReadMoreSize = $this->get('jf_k2ModLatestBlogsReadMoreSize');
		   /* 98 */ $jf_k2ModSearchInputSize = $this->get('jf_k2ModSearchInputSize');
		   /* 99 */ $jf_k2ModLoginLabelSize = $this->get('jf_k2ModLoginLabelSize');
		   /* 100 */ $jf_k2ModLoginButtonSize = $this->get('jf_k2ModLoginButtonSize');
		   /* 101 */ $jf_k2ModLoginLinksSize = $this->get('jf_k2ModLoginLinksSize');
		   /* 102 */ $jf_k2ModLoginUsernameSize = $this->get('jf_k2ModLoginUsernameSize');
		   /* 103 */ $jf_k2ModLoginCommentsSize = $this->get('jf_k2ModLoginCommentsSize');
		   /* 104 */ $jf_k2ModLoginUserLinksSize = $this->get('jf_k2ModLoginUserLinksSize');
		   /* ## */  
		   /* ## */ 
		   /* ## */ 


			//  1-4
            $gantry->addInlineStyle('.menutop li.root > .item{font-size:'.$jf_menuParentSize.';text-transform:'.$jf_menuParentTransformSize.'}.menutop ul li .item{font-size:'.$jf_menuChildSize.';text-transform:'.$jf_menuChildTransformSize.'}');
			//  5 - Tipsy Tooltip
			if ($jf_tipsyTooltipSize) {
				$gantry->addInlineStyle('.tipsy-inner{font-size:'.$jf_tipsyTooltipSize.'}');
			}
			//  6 - Fast Navigation
			if ($jf_fastNavTitleSize) {
				$gantry->addInlineStyle('#jf-logomodalcontent .jf-logomenu-title,#jf-logomenu-close:hover span{font-size:'.$jf_fastNavTitleSize.'}');
			}
			//  7 - JF Login Title
			if ($jf_jfLoginTitleSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-content .jf-login-title{font-size:'.$jf_jfLoginTitleSize.'}');
			}
			//  8 - JF Login Input
			if ($jf_jfLoginInputSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-content #form-login-username #modlgn-username,#jf-login .jf-login-content #form-login-password #modlgn-passwd{font-size:'.$jf_jfLoginInputSize.'}');
			}
			//  9 - JF Login Remember
			if ($jf_jfLoginRememberSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-content #form-login-remember label{font-size:'.$jf_jfLoginRememberSize.'}');
			}
			// 10 - JF Login Forgot
			if ($jf_jfLoginForgotSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-content .jf-login-forgot a{font-size:'.$jf_jfLoginForgotSize.'}');
			}
			// 11 - JF Login Register
			if ($jf_jfLoginRegisterSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-content .jf-login-register a{font-size:'.$jf_jfLoginRegisterSize.'}');
			}
			// 12 - JF Login Greeting
			if ($jf_jfLoginGreetingSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-greeting .login-greeting{font-size:'.$jf_jfLoginGreetingSize.'}');
			}
			// 13 - JF Login Logout
			if ($jf_jfLoginLogoutSize) {
				$gantry->addInlineStyle('#jf-login .jf-login-loggedcont.s-joomla-v .logout-button .button{font-size:'.$jf_jfLoginLogoutSize.'}');
			}
			// 14 - JF Search Input
			if ($jf_jfSearchInputSize) {
				$gantry->addInlineStyle('#jf-search .jf-search-content #mod-search-searchword{font-size:'.$jf_jfSearchInputSize.'}');
			}
			// 15 - ShowCase Title
			if ($jf_showCaseTitleSize) {
				$gantry->addInlineStyle('.jf-showcase-mod .jf-showcase-mod-title{font-size:'.$jf_showCaseTitleSize.'}');
			}
			// 16 - Showcase Button
			if ($jf_showcaseButtonSize) {
				$gantry->addInlineStyle('.jf-showcase-mod .jf-showcase-mod-btn{font-size:'.$jf_showcaseButtonSize.'}');
			}
			// 17 - TinyCarousel List
			if ($jf_tinyCarouselListSize) {
				$gantry->addInlineStyle('#jf-tinycarousel .overview li ul.jf_typo_lists li{font-size:'.$jf_tinyCarouselListSize.'}');
			}
			// 18 - TinyCarousel Welcome Title
			if ($jf_tinyCarouselWelcomeTitleSize) {
				$gantry->addInlineStyle('#jf-welcome .jf-welcome-content .jf-welcome-title{font-size:'.$jf_tinyCarouselWelcomeTitleSize.'}');
			}
			// 19 - TinyCarousel Welcome Descr.
			if ($jf_tinyCarouselWelcomeDescrSize) {
				$gantry->addInlineStyle('#jf-welcome .jf-welcome-content .jf-welcome-desc{font-size:'.$jf_tinyCarouselWelcomeDescrSize.'}');
			}
			// 20 - Recent-Projects Title
			if ($jf_recentProjectsTitleSize) {
				$gantry->addInlineStyle('.jf-recent-projects .jf-recent-projects-title .jf-recent-projects-title-m{font-size:'.$jf_recentProjectsTitleSize.'}');
			}
			// 21 - Recent-Projects Item Title
			if ($jf_recentProjectsItemTitleSize) {
				$gantry->addInlineStyle('.jf-portfolio-item .jf-portfolio-title-text{font-size:'.$jf_recentProjectsItemTitleSize.'}');
			}
			// 22 - Recent-Projects Button
			if ($jf_recentProjectsButtonSize) {
				$gantry->addInlineStyle('.jf-recent-projects .jf-recent-projects-viewall a{font-size:'.$jf_recentProjectsButtonSize.'}');
			}
			// 23 - Our Friends Title
			if ($jf_ourFriendsTitleSize) {
				$gantry->addInlineStyle('.jf-our-friends .jf-our-friends-title .jf-our-friends-title-m{font-size:'.$jf_ourFriendsTitleSize.'}');
			}
			// 24 - Our Friends Main Descr.
			if ($jf_ourFriendsMainDescrSize) {
				$gantry->addInlineStyle('.jf_friends_bottom_title{font-size:'.$jf_ourFriendsMainDescrSize.'}');
			}
			// 25 - Recent Tweets Text
			if ($jf_recentTweetsTextSize) {
				$gantry->addInlineStyle('#jf_recent_tweets #twitter_update_list li{font-size:'.$jf_recentTweetsTextSize.'}');
			}
			// 26 - Recent Tweets Link
			if ($jf_recentTweetsLinkSize) {
				$gantry->addInlineStyle('#jf_recent_tweets #twitter_update_list li a{font-size:'.$jf_recentTweetsLinkSize.'}');
			}
			// 27 - Module Title
			if ($jf_moduleTitleSize) {
				$gantry->addInlineStyle('.title,.component-content h2{font-size:'.$jf_moduleTitleSize.'}');
			}
			// 28 - Footer Menu
			if ($jf_footerMenuSize) {
				$gantry->addInlineStyle('#rt-footer ul.menu li a,#rt-footer ul.menu li span{font-size:'.$jf_footerMenuSize.'}');
			}
			// 29 - Article Title
			if ($jf_articleTitleSize) {
				$gantry->addInlineStyle('.component-content .blog h2,.component-content .item-page h2{font-size:'.$jf_articleTitleSize.'}');
			}
			// 30 - BreadCrumb
			if ($jf_breadCrumbSize) {
				$gantry->addInlineStyle('#rt-breadcrumbs .breadcrumbs a,#rt-breadcrumbs .breadcrumbs span{font-size:'.$jf_breadCrumbSize.'}');
			}
			// 31 - Article Date
			if ($jf_articleDateSize) {
				$gantry->addInlineStyle('.jf-blog-item-date{font-size:'.$jf_articleDateSize.'}');
			}
			// 32 - Article Author
			if ($jf_articleAuthorSize) {
				$gantry->addInlineStyle('.jf-blog-item-author{font-size:'.$jf_articleAuthorSize.'}');
			}
			// 33 - Article Category
			if ($jf_articleCategorySize) {
				$gantry->addInlineStyle('.jf-blog-item-category{font-size:'.$jf_articleCategorySize.'}');
			}
			// 34 - Article ReadMore
			if ($jf_articleReadMoreSize) {
				$gantry->addInlineStyle('.readmore{font-size:'.$jf_articleReadMoreSize.'}');
			}
			// 35 - Article PageNav
			if ($jf_articlePageNavSize) {
				$gantry->addInlineStyle('.component-content .pagenav li a{font-size:'.$jf_articlePageNavSize.'}');
			}
			// 36 - Pagination Counter
			if ($jf_paginationCounterSize) {
				$gantry->addInlineStyle('.component-content .pagination .counter{font-size:'.$jf_paginationCounterSize.'}');
			}
			// 37 - Pagination Navigations
			if ($jf_paginationNavigationsSize) {
				$gantry->addInlineStyle('.component-content .pagination ul li span{font-size:'.$jf_paginationNavigationsSize.'}');
			}
			// 38 - Right Menu
			if ($jf_rightMenuSize) {
				$gantry->addInlineStyle('#rt-main ul.menu li a,#rt-main ul.menu li .item,#rt-main ul.menu li .separator{font-size:'.$jf_rightMenuSize.'}');
			}
			// 39 - Right Login Form Label
			if ($jf_rightLoginFormLabelSize) {
				$gantry->addInlineStyle('#login-form label,#login-form input{font-size:'.$jf_rightLoginFormLabelSize.'}');
			}
			// 40 - Right Login Form Link
			if ($jf_rightLoginFormLinkSize) {
				$gantry->addInlineStyle('.component-content .login + div ul li a,#login-form a{font-size:'.$jf_rightLoginFormLinkSize.'}');
			}
			// 41 - Right Search Input
			if ($jf_rightSearchInputSize) {
				$gantry->addInlineStyle('.module-content .search #mod-search-searchword{font-size:'.$jf_rightSearchInputSize.'}');
			}
			// 42 - Contact Info Module
			if ($jf_contactInfoModuleSize) {
				$gantry->addInlineStyle('.jf_contact_mod{font-size:'.$jf_contactInfoModuleSize.'}');
			}
			// 43 - Contact Page Text
			if ($jf_contactPageTextSize) {
				$gantry->addInlineStyle('.component-content .contact label,.component-content .contact input,.component-content .contact select,.component-content .contact textarea,.component-content .contact legend{font-size:'.$jf_contactPageTextSize.'}');
			}
			// 44 - Buttons
			if ($jf_buttonsSize) {
				$gantry->addInlineStyle('.button,.readon,button.validate,#member-profile a,#member-registration a,.formelm-buttons button,.btn-primary{font-size:'.$jf_buttonsSize.'}');
			}
			// 45 - Portfolio Filter
			if ($jf_portfolioFilterSize) {
				$gantry->addInlineStyle('#jf_portfolio_filter li a{font-size:'.$jf_portfolioFilterSize.'}');
			}
			// 46 - Portfolio Item Title
			if ($jf_portfolioItemTitleSize) {
				$gantry->addInlineStyle('.jf-portfolio-item-title{font-size:'.$jf_portfolioItemTitleSize.'}');
			}
			// 47 - Portfolio Item Readmore
			if ($jf_portfolioItemReadmoreSize) {
				$gantry->addInlineStyle('.jf-portfolio-item-readmore{font-size:'.$jf_portfolioItemReadmoreSize.'}');
			}
			// 48-49 - Gallery Item Title
			if ($jf_galleryItemTitleSize) {
				$gantry->addInlineStyle('.jf_typo_gallery li a:hover .mask .mask-content .title{font-size:'.$jf_galleryItemTitleSize.';letter-spacing:'.$jf_galleryItemTitleLSSize.'}');
			}
			// 50 - Pricing Table Title
			if ($jf_pricingTableTitleSize) {
				$gantry->addInlineStyle('#jf-pricing-table .jf-pricing-column h3{font-size:'.$jf_pricingTableTitleSize.'}');
			}
			// 51 - Pricing Table Cost
			if ($jf_pricingTableCostSize) {
				$gantry->addInlineStyle('#jf-pricing-table .jf-cost p{font-size:'.$jf_pricingTableCostSize.'}');
			}
			// 52 - Pricing Table Cost Interval
			if ($jf_pricingTableCostIntSize) {
				$gantry->addInlineStyle('#jf-pricing-table .jf-cost p span{font-size:'.$jf_pricingTableCostIntSize.'}');
			}
			// 53 - Pricing Table Features List
			if ($jf_pricingTableFeatListSize) {
				$gantry->addInlineStyle('#jf-pricing-table .jf-features ul li{font-size:'.$jf_pricingTableFeatListSize.'}');
			}
			// 54 - Pricing Table Purchase Button
			if ($jf_pricingTablePurchBtnSize) {
				$gantry->addInlineStyle('#jf-pricing-table .jf-buynow a{font-size:'.$jf_pricingTablePurchBtnSize.'}');
			}
			// 55 - Typo: DROPCAPS - Capital Letter
			if ($jf_typoDropcapsCapitLetSize) {
				$gantry->addInlineStyle('.jf_typo_dropcap_style1,.jf_typo_dropcap_style2,.jf_typo_dropcap_style3,.jf_typo_dropcap_style4{font-size:'.$jf_typoDropcapsCapitLetSize.'}');
			}
			// 56 - Typo: BLOCKQUOTES
			if ($jf_typoBlockquotesSize) {
				$gantry->addInlineStyle('blockquote{font-size:'.$jf_typoBlockquotesSize.'}');
			}
			// 57 - Typo: BUTTON - Size 1
			if ($jf_typoButtonsize1Size) {
				$gantry->addInlineStyle('.jf_typo_button.size1{font-size:'.$jf_typoButtonsize1Size.'}');
			}
			// 58 - Typo: BUTTON - Size 2
			if ($jf_typoButtonsize2Size) {
				$gantry->addInlineStyle('.jf_typo_button.size2{font-size:'.$jf_typoButtonsize2Size.'}');
			}
			// 59 - Typo: BUTTON - Size 3
			if ($jf_typoButtonsize3Size) {
				$gantry->addInlineStyle('.jf_typo_button.size3{font-size:'.$jf_typoButtonsize3Size.'}');
			}
			// 60 - Typo: BUTTON - Size 4
			if ($jf_typoButtonsize4Size) {
				$gantry->addInlineStyle('.jf_typo_button.size4{font-size:'.$jf_typoButtonsize4Size.'}');
			}
			// 61 - Typo: BUTTON - Size 5
			if ($jf_typoButtonsize5Size) {
				$gantry->addInlineStyle('.jf_typo_button.size5{font-size:'.$jf_typoButtonsize5Size.'}');
			}
			// 62 - Typo: Tabs Button
			if ($jf_typoTabsButtonSize) {
				$gantry->addInlineStyle('.jf_typo_simple_tabs ul.tabs li a{font-size:'.$jf_typoTabsButtonSize.'}');
			}
			// 63 - Typo: Accordion Trigger
			if ($jf_typoAccordTrigSize) {
				$gantry->addInlineStyle('.jf_typo_accord_trigger{font-size:'.$jf_typoAccordTrigSize.'}');
			}
			// 64 - Typo: Toggle Trigger
			if ($jf_typoToggleTrigSize) {
				$gantry->addInlineStyle('.jf_typo_toggle .jf_typo_toggle_trigger{font-size:'.$jf_typoToggleTrigSize.'}');
			}
			// 65 - Typo: Table Title
			if ($jf_typoTableTitleSize) {
				$gantry->addInlineStyle('table.jf_typo_table thead tr th{font-size:'.$jf_typoTableTitleSize.'}');
			}
			// 66 - Typo: Special Boxes Text
			if ($jf_typoSpecialBoxesTextSize) {
				$gantry->addInlineStyle('.jf-info-header .jf-info-text-wrap .jf-info-text-content{font-size:'.$jf_typoSpecialBoxesTextSize.'}');
			}
			// 67 - Typo: Special Boxes Close
			if ($jf_typoSpecialBoxesCloseSize) {
				$gantry->addInlineStyle('.jf-info-header .jf-info-text-wrap .jf-info-text-content .jf-info-text-content-close{font-size:'.$jf_typoSpecialBoxesCloseSize.'}');
			}
			// 68 - K2: Item Title
			if ($jf_k2ItemTitleSize) {
				$gantry->addInlineStyle('div.jf-k2-ItemHeader h3.jf-k2-ItemTitle,div.jf-k2-ItemHeader h2.jf-k2-ItemTitle{font-size:'.$jf_k2ItemTitleSize.'}');
			}
			// 69 - K2: Item Featured Title
			if ($jf_k2ItemFeaturedTitleSize) {
				$gantry->addInlineStyle('div.itemHeader h2.itemTitle span sup{font-size:'.$jf_k2ItemFeaturedTitleSize.'}');
			}
			// 70 - K2: Item Tools Text
			if ($jf_k2ItemToolsTextSize) {
				$gantry->addInlineStyle('div.itemToolbar ul li a span,div.itemToolbar ul li span.itemTextResizerTitle,div.itemToolbar ul li a.itemCommentsLink{font-size:'.$jf_k2ItemToolsTextSize.'}');
			}
			// 71 - K2: Item Rating Text
			if ($jf_k2ItemRatingTextSize) {
				$gantry->addInlineStyle('.itemRatingLog{font-size:'.$jf_k2ItemRatingTextSize.'}');
			}
			// 72 - K2: Item Date
			if ($jf_k2ItemDateSize) {
				$gantry->addInlineStyle('.jf-k2-item-date{font-size:'.$jf_k2ItemDateSize.'}');
			}
			// 73 - K2: Item Author
			if ($jf_k2ItemAuthorSize) {
				$gantry->addInlineStyle('.jf-k2-item-author{font-size:'.$jf_k2ItemAuthorSize.'}');
			}
			// 74 - K2: Item Category
			if ($jf_k2ItemCategorySize) {
				$gantry->addInlineStyle('.jf-k2-item-category{font-size:'.$jf_k2ItemCategorySize.'}');
			}
			// 75 - K2: Item Views
			if ($jf_k2ItemViewsSize) {
				$gantry->addInlineStyle('.jf-k2-item-views{font-size:'.$jf_k2ItemViewsSize.'}');
			}
			// 76 - K2: Item Content Footer
			if ($jf_k2ItemContentFooterSize) {
				$gantry->addInlineStyle('div.itemContentFooter{font-size:'.$jf_k2ItemContentFooterSize.'}');
			}
			// 77 - K2: Item Tags
			if ($jf_k2ItemTagsSize) {
				$gantry->addInlineStyle('.jf-k2-TagsBlock a{font-size:'.$jf_k2ItemTagsSize.'}');
			}
			// 78 - K2: Item Author Info
			if ($jf_k2ItemAuthorInfoSize) {
				$gantry->addInlineStyle('div.jf-k2-userBlock{font-size:'.$jf_k2ItemAuthorInfoSize.'}');
			}
			// 79 - K2: Item Author Latest
			if ($jf_k2ItemAuthorLatestSize) {
				$gantry->addInlineStyle('div.itemAuthorLatest ul li a,div.itemRelated ul li a{font-size:'.$jf_k2ItemAuthorLatestSize.'}');
			}
			// 80 - K2: Item Navigation
			if ($jf_k2ItemNavigationSize) {
				$gantry->addInlineStyle('div.itemNavigation{font-size:'.$jf_k2ItemNavigationSize.'}');
			}
			// 81 - K2: Item Comment Date
			if ($jf_k2ItemCommentDateSize) {
				$gantry->addInlineStyle('div.itemComments ul.itemCommentsList li span.commentDate{font-size:'.$jf_k2ItemCommentDateSize.'}');
			}
			// 82 - K2: Item Comment Author
			if ($jf_k2ItemCommentAuthorSize) {
				$gantry->addInlineStyle('div.itemComments ul.itemCommentsList li span.commentAuthorName{font-size:'.$jf_k2ItemCommentAuthorSize.'}');
			}
			// 83 - K2: Item Comment Link
			if ($jf_k2ItemCommentLinkSize) {
				$gantry->addInlineStyle('div.itemComments ul.itemCommentsList li span.commentLink a,div.itemComments ul.itemCommentsList li span.commentLink a:hover{font-size:'.$jf_k2ItemCommentLinkSize.'}');
			}
			// 84 - K2: Item Comment Text
			if ($jf_k2ItemCommentTextSize) {
				$gantry->addInlineStyle('div.itemComments ul.itemCommentsList li p{font-size:'.$jf_k2ItemCommentTextSize.'}');
			}
			// 85 - K2: Item Leave Comment Decr.
			if ($jf_k2ItemLeaveComntDecrSize) {
				$gantry->addInlineStyle('div.itemCommentsForm p.itemCommentsFormNotes{font-size:'.$jf_k2ItemLeaveComntDecrSize.'}');
			}
			// 86 - K2: Item Leave Comment Label
			if ($jf_k2ItemLeaveComntLabelSize) {
				$gantry->addInlineStyle('div.itemCommentsForm form label.formComment,div.itemCommentsForm form label.formName,div.itemCommentsForm form label.formEmail,div.itemCommentsForm form label.formUrl,div.itemCommentsForm form label.formRecaptcha{font-size:'.$jf_k2ItemLeaveComntLabelSize.'}');
			}
			// 87 - K2: Item Leave Comment Input
			if ($jf_k2ItemLeaveComntInputSize) {
				$gantry->addInlineStyle('div.itemCommentsForm form .inputbox{font-size:'.$jf_k2ItemLeaveComntInputSize.'}');
			}
			// 88 - K2: Item Leave Comment Button
			if ($jf_k2ItemLeaveComntBtnSize) {
				$gantry->addInlineStyle('div.itemCommentsForm form input#submitCommentButton{font-size:'.$jf_k2ItemLeaveComntBtnSize.'}');
			}
			// 89 - K2: Item BackToTop Button
			if ($jf_k2ItemBackToTopBtnSize) {
				$gantry->addInlineStyle('div.itemBackToTop a{font-size:'.$jf_k2ItemBackToTopBtnSize.'}');
			}
			// 90 - K2: Category - Comment Link
			if ($jf_k2CategoryCmntLinkSize) {
				$gantry->addInlineStyle('div.jf-k2-ItemCommentsLink a{font-size:'.$jf_k2CategoryCmntLinkSize.'}');
			}
			// 91 - K2: Category - ReadMore
			if ($jf_k2CategoryReadMoreSize) {
				$gantry->addInlineStyle('div.jf-k2-ItemReadMore a{font-size:'.$jf_k2CategoryReadMoreSize.'}');
			}
			// 92 - K2: Category - Navigation
			if ($jf_k2CategoryNavigationSize) {
				$gantry->addInlineStyle('div.jf-k2-Pagination ul li .pagenav,div.jf-k2-Pagination ul li a.pagenav{font-size:'.$jf_k2CategoryNavigationSize.'}');
			}
			// 93 - K2: Category - Pagination
			if ($jf_k2CategoryPaginationSize) {
				$gantry->addInlineStyle('div.jf-k2-Pagination{font-size:'.$jf_k2CategoryPaginationSize.'}');
			}
			// 94 - K2: Module: Latest Blogs Title
			if ($jf_k2ModLatestBlogsTitleSize) {
				$gantry->addInlineStyle('.nspArt h4.nspHeader a{font-size:'.$jf_k2ModLatestBlogsTitleSize.'}');
			}
			// 95 - K2: Module: Latest Blogs Info
			if ($jf_k2ModLatestBlogsInfoSize) {
				$gantry->addInlineStyle('.nspArt p.nspInfo{font-size:'.$jf_k2ModLatestBlogsInfoSize.'!important}');
			}
			// 96 - K2: Module: Latest Blogs Text
			if ($jf_k2ModLatestBlogsTextSize) {
				$gantry->addInlineStyle('.nspArt p.nspText{font-size:'.$jf_k2ModLatestBlogsTextSize.'}');
			}
			// 97 - K2: Module: Latest Blogs ReadMore
			if ($jf_k2ModLatestBlogsReadMoreSize) {
				$gantry->addInlineStyle('div.k2SearchBlock form input.inputbox{font-size:'.$jf_k2ModLatestBlogsReadMoreSize.'}');
			}
			// 98 - K2: Module: Search Input
			if ($jf_k2ModSearchInputSize) {
				$gantry->addInlineStyle('div.k2SearchBlock form input.inputbox{font-size:'.$jf_k2ModSearchInputSize.'}');
			}
			// 99 - K2: Module: Login Label
			if ($jf_k2ModLoginLabelSize) {
				$gantry->addInlineStyle('div.k2LoginBlock fieldset.input p label{font-size:'.$jf_k2ModLoginLabelSize.'}');
			}
			// 100 - K2: Module: Login Button
			if ($jf_k2ModLoginButtonSize) {
				$gantry->addInlineStyle('div.k2LoginBlock fieldset.input input.button,div.k2UserBlock form input.ubLogout{font-size:'.$jf_k2ModLoginButtonSize.'}');
			}
			// 101 - K2: Module: Login Links
			if ($jf_k2ModLoginLinksSize) {
				$gantry->addInlineStyle('div.k2LoginBlock ul li a{font-size:'.$jf_k2ModLoginLinksSize.'}');
			}
			// 102 - K2: Module: Login Username
			if ($jf_k2ModLoginUsernameSize) {
				$gantry->addInlineStyle('div.k2UserBlock div.k2UserBlockDetails span.ubName{font-size:'.$jf_k2ModLoginUsernameSize.'}');
			}
			// 103 - K2: Module: Login Comments
			if ($jf_k2ModLoginCommentsSize) {
				$gantry->addInlineStyle('div.k2UserBlock div.k2UserBlockDetails span.ubCommentsCount{font-size:'.$jf_k2ModLoginCommentsSize.'}');
			}
			// 104 - K2: Module: Login User Links
			if ($jf_k2ModLoginUserLinksSize) {
				$gantry->addInlineStyle('div.k2UserBlock ul.k2UserBlockActions li a{font-size:'.$jf_k2ModLoginUserLinksSize.'}');
			}
			
        }
    }
	
	function isOrderable() {
		return false;
	}
}