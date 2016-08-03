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
class GantryFeatureJfRecentTweets extends GantryFeature {
    var $_feature_name = 'jf_recenttweets';

	function render($position="jf-recenttweets") {
	    ob_start();
	    ?>
			<script type='text/javascript' src='http://twitter.com/javascripts/blogger.js'></script>
			<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?callback=twitterCallback2&amp;screen_name=<?php echo $this->get('jf_recenttweets_username'); ?>&amp;count=<?php echo $this->get('jf_recenttweets_count'); ?>"></script>
		<?php
	    return ob_get_clean();
	}
	
}