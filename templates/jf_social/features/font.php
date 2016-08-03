<?php
/**
 * @version   $Id: font.php 3103 2012-09-03 16:58:49Z djamil $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package         gantry
 * @subpackage      features
 */
class GantryFeatureFont extends GantryFeature
{

	var $_feature_name = 'font';
	var $_standard_fonts = array(
		"default",
		"geneva",
		"georgia",
		"helvetica",
		"helveticaneue",
		"lucida",
		"optima",
		"palatino",
		"trebuchet",
		"tahoma"
	);

	private $_value_backup;

	function isEnabled()
	{
		return true;
	}

	function isInPosition($position)
	{
		return false;
	}

	function isOrderable()
	{
		return false;
	}


	function init()
	{
		/** @var $gantry Gantry */
		global $gantry;

		$font_family = $this->get('family');

		if (strpos($font_family, ':')) {
			$explode = explode(':', $font_family);

			$delimiter = $explode[0];
			$name      = $explode[1];
			$variant   = isset($explode[2]) ? $explode[2] : null;

			// we re-set the font-family to a font-name with no delimiter
			// for backward compatibility
			$this->_backwardCompatibility($name);
		} else {
			$delimiter = false;
			$name      = $font_family;
			$variant   = null;
		}

		if (isset($variant) && $variant) $variant = ':' . $variant;

		switch ($delimiter) {
			// standard fonts
			case 's':
				break;
			// google fonts
			case 'g':
				$this->_addGoogleFont($name, $variant);
				break;
			default:
				if ($this->_isStandardFont($name)) break;
				if ($this->_searchForGoogleFont($name)) $this->_addGoogleFont($name, $variant);
		}

	}

	function _isStandardFont($name)
	{
		/** @var $gantry Gantry */
		global $gantry;
		if (strtolower($name) == strtolower($gantry->templateName) || in_array(strtolower($name), $this->_standard_fonts)) {
			return true;
		} else {
			return false;
		}
	}

	function _addGoogleFont($name, $variant)
	{
		/** @var $gantry Gantry */
		global $gantry;

		$variant = $variant ? $variant : '';

		$gantry->addStyle('//fonts.googleapis.com/css?family=' . str_replace(" ", "+", $name) . $variant);
		$gantry->addInlineStyle("#rt-menu ul.menu li a,.menutop li.root>.item,.menu-type-splitmenu .menutop li .item,.menutop ul li>.item,#jf-preloader #jf-progress,#jf-logomodalcontent .jf-logomenu-title,#jf-login .jf-login-content #form-login-username #modlgn-username,#jf-login .jf-login-content #form-login-password #modlgn-passwd,.jf-login-title,#jf-login .jf-login-content #form-login-remember,#jf-login .jf-login-content .jf-login-authorization-button,#jf-login .jf-login-content .jf-login-forgot a,#jf-login .jf-login-content .jf-login-register a,#jf-login .jf-login-content .logout-button .button,#jf-login .jf-login-content .login-greeting,#rt-breadcrumbs .breadcrumbs a,#rt-breadcrumbs .breadcrumbs span,#jf-search .jf-search-content form input.button,#jf-search .jf-search-content #mod-search-searchword,#jf-login .jf-login-greeting .login-greeting,#jf-login .jf-login-loggedcont.s-joomla-v .logout-button .button,#jf-login .jf-login-content .jf-login-activation a,#jf-login .jf-login-loggedcont.s-jf-js-login-v .jf-login-loggedcont-loader table,#jf-login .jf-login-loggedcont.s-jf-js-login-v .logout .button,.default-tipsy-inner,.jf-flexslider,#jf-welcome,.jf-recent-projects .jf-recent-projects-title,.jf-recent-projects .jf-recent-projects-viewall,.jf-portfolio-item,.jf-showcase-mod,#searchForm,#searchForm .word input,#searchForm select,.button,.readon,.readmore,button.validate,#member-profile a,#member-registration a,.formelm-buttons button,.btn-primary,.component-content .search-results .result-title,.component-content .search-results .result-category,.component-content .pagination,.component-content .login,.component-content .login-fields #username,.login-fields #password,.component-content .login+div ul li a,#login-form a,.component-content .profile,.component-content .profile-edit,.component-content .profile-edit input,.component-content .profile-edit select,.component-content #member-registration,#member-registration input,.component-content .remind,.component-content .reset,.jf-blog-item-image-block,.component-content .item-page .pagenav li,.category-list,.category-list select,ul.menu li a,ul.menu li .item,ul.menu li .separator,#login-form,#login-form label,#login-form input,.module-content .search #mod-search-searchword,.component-content .finder #search-form,.component-content .finder #search-form .inputbox,#search-query-explained,.component-content .contact,.jf_contact_mod,#xmap,.quovolve-box ul li cite,.jf-our-friends,.camera_caption>div,.jf-k2-item-date,.jf-k2-item-author,.jf-k2-item-category,.jf-k2-item-views,.itemRatingLog,div.jf-k2-ItemHeader .jf-k2-ItemTitle,div.jf-k2-ItemReadMore a,div.jf-k2-ItemCommentsLink a,div.k2Pagination,.jf-k2-TagsBlock,.jf-k2-userBlock,div.itemListSubCategories h3,div.subCategory .subCategoryMore,div.itemToolbar,div.itemContentFooter,.jf-k2-socialbtn-mask-txt,div.itemAuthorLatest,div.itemRelated,div.itemNavigation,div.itemComments,div.itemCommentsForm form .inputbox,div.itemCommentsForm form input#submitCommentButton,div.itemBackToTop a,div.k2TagCloudBlock a,.nspArt h4.nspHeader a,.nspArt p.nspInfo,.nspArt .readon,div.k2SearchBlock form input.inputbox,div.k2SearchBlock div.k2LiveSearchResults,div.k2LoginBlock,div.k2LoginBlock fieldset.input p input,div.k2LoginBlock fieldset.input input.button,div.k2UserBlock,div.k2UserBlock form input.ubLogout,.jf_typo_title,h1,h2,h3,h4,h5,h6,.jf_typo_toggle .jf_typo_toggle_trigger,.jf_typo_dropcap_style1,.jf_typo_dropcap_style2,.jf_typo_dropcap_style3,.jf_typo_dropcap_style4,.jf_typo_button,.jf_typo_simple_tabs ul.tabs li a,.jf_typo_accord_trigger,table.jf_typo_table thead tr th,#jf-pricing-table,.jf_typo_gallery li a .mask .mask-content .title,.jf-info-header,#jf_portfolio_filter,#jf_portfolio_items{font-family:'".$name."','Helvetica',arial,serif!important}");
	}


	function _searchForGoogleFont($name)
	{
		/** @var $gantry Gantry */
		global $gantry;
		$google_json = $gantry->gantryPath . '/' . 'admin' . '/' . 'widgets' . '/' . 'fonts' . '/' . 'js' . '/' . 'google-fonts.json';
		if (!file_exists($google_json)) return false;

		$fonts = json_decode(file_get_contents($google_json), true);
		$fonts = $fonts['items'];

		return $this->_in_array_r($name, $fonts);
	}

	function _backwardCompatibility($value)
	{
		/** @var $gantry Gantry */
		global $gantry;
		$param = $this->_feature_name . '-family';

		if (in_array($param, $gantry->_bodyclasses)) {
			$position = array_search($param, $gantry->_bodyclasses);
			unset($gantry->_bodyclasses[$position]);
			array_splice($gantry->_bodyclasses, $position, 0, strtolower(str_replace(" ", "-", $param . '-' . $value)));
		}
	}

	function _in_array_r($needle, $haystack, $strict = true)
	{
		foreach ($haystack as $item) {
			if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->_in_array_r($needle, $item, $strict))) {
				return true;
			}
		}

		return false;
	}

}
