<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_toolbar
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die('Restricted access');
jimport('joomla.form.formfield');
class JFormFieldAbout extends JFormField {
	protected $type = 'About';
	protected function getInput() {
		return '<div id="jf-about-us"><div class="jf-content"><table border="0"><tr><td valign="center" width="94px"><a href="http://www.joomforest.com" target="_blank"><img src="'.JURI::root().$this->element['path'].'/logo.png"></a></td><td valign="top"><p class="title"> JoomForest.com </p><p class="descr"> JoomForest is Professional Designers Team. We provide templates on Joomla and also provide themes for popular extensions, such as are "JomSocial" and "Kunena forum". </p><p class="social"><a class="social-f jf-module-tip-n" href="https://www.facebook.com/JoomForest" target="_blank" title="find us on facebook"></a><a class="social-t jf-module-tip-n" href="http://twitter.com/JoomForest" target="_blank" title="follow us on twitter"></a><a class="social-g jf-module-tip-n" href="https://plus.google.com/103291323205603379401/" target="_blank" title="find us on Google+"></a></p></td></tr></table></div></div>';
	}
}?>