<?php
/**
* @version   $Id: index.php 2968 2012-08-31 22:19:53Z kevin $
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

// load and inititialize gantry class
require_once('lib/gantry/gantry.php');
/** @var $gantry Gantry */
$gantry->init();

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));

// detect mobile
require_once 'jf_mob_det.php';
$jfmobdetect = new JF_Mobile_Detect;

?>
<!doctype html>
<html xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $gantry->displayHead();
    $gantry->addStyle('grid-responsive.css', 5);
    $gantry->addStyles(array('jftemplate.css','jf-typo.css','jf-k2.css','jf-rtl.css','jf-custom.css'));
        $gantry->addLess('global.less', 'master.css', 8);
    
        if ($gantry->browser->name == 'ie'){
      $gantry->addInlineStyle('.jf_tip_btn li{opacity:0;-moz-opacity:0;filter:alpha(opacity=0)}');
      if ($gantry->browser->shortversion == 8){
        $gantry->addScript('html5shim.js');
        $gantry->addStyle('jf-ie8.css');
      }
    }

        $gantry->addScript('rokmediaqueries.js');
    $gantry->addScript('load-transition.js');
    $hidden = ' class="rt-hidden"';
    ?>
  <link rel="stylesheet" href="<?php echo JURI::root().'templates/'.$this->template; ?>/css/jf_style_<?php echo $gantry->get('jf_mainColor',''); ?>.css" type="text/css" />
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40194566-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</head>
<body <?php echo $gantry->displayBodyTag(); ?>>

  <div id="jf-preloader">
    <div id="jf-indicator"></div>
    <div id="jf-preloader-logo"></div>
    <div id="jf-progress"></div>
  </div>

    <?php /** Begin Drawer **/ if ($gantry->countModules('drawer')) : ?>
    <div id="rt-drawer">
        <div class="rt-container">
            <?php echo $gantry->displayModules('drawer','standard','standard'); ?>
            <div class="clear"></div>
        </div>
    </div>
    <?php /** End Drawer **/ endif; ?>
  <?php if (!$jfmobdetect->isMobile()) { ?>
    <?php /** Begin TOP PANEL **/ if ($gantry->countModules('jf-toppanel')) : ?>
      <div id="jf-toppanel">
        <div class="jf-toppanel-container">
          <div class="rt-container">
            <div id="jf-toppanel-button"></div>
            <div id="jf-toppanel-content">
              <?php echo $gantry->displayModules('jf-toppanel','standard','standard'); ?>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    <?php /** End TOP PANEL **/ endif; ?>
  <?php } ?>
    <?php /** Begin Top Surround **/ if ($gantry->countModules('top') or $gantry->countModules('header')) : ?>
    <header id="rt-top-surround">
    <?php /** Begin Top **/ if ($gantry->countModules('top')) : ?>
    <div id="rt-top" <?php echo $gantry->displayClassesByTag('rt-top'); ?>>
      <div class="rt-container">
        <?php echo $gantry->displayModules('top','standard','standard'); ?>
        <div class="clear"></div>
      </div>
    </div>
    <?php /** End Top **/ endif; ?>
    <?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
      <div id="jf-header">
        <div class="rt-container">
          <?php echo $gantry->displayModules('header','standard','standard'); ?>
          <div id="jf-undermenu" class="rt-grid-8 rt-omega">
              <?php /** Begin JF Language **/ if ($gantry->countModules('jf-language')) : ?>
              <div id="jf-language">
                <a class="jf-language-button jf-tipsy-n" title="<?php echo JText::_('JF_CLICK_TO_CHANGE_LANGUAGE'); ?>">
                  <span></span>
                </a>
                <div class="jf-language-content">
                  <?php echo $gantry->displayModules('jf-language','basic','basic'); ?>
                </div>
              </div>
              <?php /** End JF Language **/ endif; ?>
  
              
              <?php /** Begin JF Login **/ if ($gantry->countModules('jf-login')) : ?>
                <?php echo $gantry->displayModules('jf-login','basic','basic'); ?>
              <?php /** End JF Login **/ endif; ?>
              
              <?php /** Begin JF Search **/ if ($gantry->countModules('jf-search')) : ?>
              <div id="jf-search">
                <a class="jf-search-button jf-tipsy-n" title="<?php echo JText::_('JF_CLICK_TO_SEARCH'); ?>">
                  <span></span>
                </a>
                <a class="jf-search-button-close jf-tipsy-n" title="<?php echo JText::_('JF_CLOSE_SEARCH'); ?>">
                  <span></span>
                </a>
                <div class="jf-search-content">
                  <?php echo $gantry->displayModules('jf-search','basic','basic'); ?>
                </div>
              </div>
              <?php /** End JF Search **/ endif; ?>
              
          </div>
          <div id="jf-sticky-showmenu"></div>
          <div class="clear"></div>
        </div>
        <div id="top-shadow-down"></div>
      </div>
      
      <?php /** Begin JF Full Width Slideshow **/ if ($gantry->countModules('jf-full-width-slideshow')) : ?>
        <div id="jf-full-width-slideshow">
          <?php echo $gantry->displayModules('jf-full-width-slideshow','basic','basic'); ?>
        </div>
      <?php /** End JF Full WidthSlideshow **/ endif; ?>
      
      <?php /** Begin JF Slideshow **/ if ($gantry->countModules('jf-slideshow')) : ?>
        <div id="jf-slideshow">
          <div class="rt-container">
            <?php echo $gantry->displayModules('jf-slideshow','basic','basic'); ?>
          </div>
        </div>
      <?php /** End JF Slideshow **/ endif; ?>
      
      <?php /** Begin JF Slideshow **/ if ($gantry->countModules('jf-map')) : ?>
        <div id="jf-map">
          <?php echo $gantry->displayModules('jf-map','basic','basic'); ?>
        </div>
      <?php /** End JF Slideshow **/ endif; ?>
        
    <?php /** End Header **/ endif; ?>
  </header>
  <?php /** End Top Surround **/ endif; ?>
  
  
  <div id="jf-component-bg">
    <div id="jf-component-trans" class="rt-hidden">

      <?php /** Begin Breadcrumbs **/ if ($gantry->countModules('jf-usertip')) : ?>
        <div id="jf_tip" class="rt-container">
          <div class="jf_tip_container rt-container">
            <div class="jf_tip_btn_cont">
              <ul class="jf_tip_btn jf-tipsy-w" title="<?php echo JText::_('JF_CLICK_TO_OPEN'); ?>"><li></li><li></li><li></li><li></li></ul>
            </div>
            <div class="jf_tip_content rt-container">
              <div class="jf_tip_content_close jf-tipsy-e" title="<?php echo JText::_('JF_CLOSE_IT'); ?>"></div>
              <?php echo $gantry->displayModules('jf-usertip','basic','basic'); ?>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      <?php /** End Breadcrumbs **/ endif; ?>
    
      <?php /** Begin Breadcrumbs **/ if ($gantry->countModules('breadcrumb')) : ?>
        <div id="jf-breadcrumbs-info" class="rt-container">
          <div class="jf-breadcrumbs-info-container">
            <div id="rt-breadcrumbs">
              <div class="rt-container">
                <div class="jf-breadcrumbs-padding">
                  <?php echo $gantry->displayModules('breadcrumb','basic','basic'); ?>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php /** End Breadcrumbs **/ endif; ?>
      
      <?php if (!$jfmobdetect->isMobile()) { ?>
        <?php /** Begin MIDDLE PANEL **/ if ($gantry->countModules('jf-middlepanel')) : ?>
          <div id="jf-middlepanel">
            <div class="jf-middlepanel-container">
              <div class="rt-container">
                <div id="jf-middlepanel-button" class="jf-tipsy-e" title="<?php echo JText::_('JF_MIDDLEPANEL_TOOLTIP'); ?>"></div>
                <div id="jf-middlepanel-content">
                  <?php echo $gantry->displayModules('jf-middlepanel','basic','basic'); ?>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        <?php /** End MIDDLE PANEL **/ endif; ?>
      <?php } ?>
      
      <?php /** Begin Showcase **/ if ($gantry->countModules('showcase')) : ?>
      <div id="rt-showcase">
        <div class="rt-showcase-pattern">
          <div class="rt-container">
            <?php echo $gantry->displayModules('showcase','standard','standard'); ?>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <?php /** End Showcase **/ endif; ?>
      <?php /** Begin JF Welcome **/ if ($gantry->countModules('jf-welcome')) : ?>
      <div id="jf-welcome">
        <div class="rt-container">
          <?php echo $gantry->displayModules('jf-welcome','basic','basic'); ?>
          <div class="clear "></div>
        </div>
      </div>
      <?php /** End JF Welcome **/ endif; ?>
      <?php /** Begin JF Resent Projects **/ if ($gantry->countModules('jf-recent-projects')) : ?>
      <div id="jf-recent-projects">
        <div class="rt-container">
          <?php echo $gantry->displayModules('jf-recent-projects','basic','basic'); ?>
          <div class="clear "></div>
        </div>
      </div>
      <?php /** End JF Resent Projects **/ endif; ?>
      <div id="rt-transition"<?php echo $hidden; ?>>
        <div id="rt-mainbody-surround">
          <?php /** Begin Feature **/ if ($gantry->countModules('feature')) : ?>
          <div id="rt-feature">
            <div class="rt-container">
              <?php echo $gantry->displayModules('feature','standard','standard'); ?>
              <div class="clear"></div>
            </div>
          </div>
          <?php /** End Feature **/ endif; ?>
          <?php /** Begin Utility **/ if ($gantry->countModules('utility')) : ?>
          <div id="rt-utility">
            <div class="rt-container">
              <?php echo $gantry->displayModules('utility','standard','standard'); ?>
              <div class="clear"></div>
            </div>
          </div>
          <?php /** End Utility **/ endif; ?>
          <?php /** Begin Main Top **/ if ($gantry->countModules('maintop')) : ?>
          <div id="rt-maintop">
            <div class="rt-container">
              <?php echo $gantry->displayModules('maintop','standard','standard'); ?>
              <div class="clear"></div>
            </div>
          </div>
          <?php /** End Main Top **/ endif; ?>
          <?php /** Begin Main Body **/ ?>
            <?php echo $gantry->displayMainbody('mainbody','sidebar','standard','standard','standard','standard','standard'); ?>
          <?php /** End Main Body **/ ?>
          <?php /** Begin Main Bottom **/ if ($gantry->countModules('mainbottom')) : ?>
          <div id="rt-mainbottom">
            <div class="rt-container">
              <?php echo $gantry->displayModules('mainbottom','standard','standard'); ?>
              <div class="clear"></div>
            </div>
          </div>
          <?php /** End Main Bottom **/ endif; ?>
          <?php /** Begin Extension **/ if ($gantry->countModules('extension')) : ?>
          <div id="rt-extension">
            <div class="rt-container">
              <?php echo $gantry->displayModules('extension','standard','standard'); ?>
              <div class="clear"></div>
            </div>
          </div>
          <?php /** End Extension **/ endif; ?>
        </div>
      </div>
      <?php /** Begin Bottom **/ if ($gantry->countModules('bottom')) : ?>
      <div id="rt-bottom">
        <div class="rt-container">
          <?php echo $gantry->displayModules('bottom','standard','standard'); ?>
          <div class="clear"></div>
        </div>
      </div>
      <?php /** End Bottom **/ endif; ?>

    </div>
  </div>
  
  <?php /** Begin Footer Section **/ if ($gantry->countModules('footer') or $gantry->countModules('copyright')) : ?>
  
  <footer id="rt-footer-surround">
    <div id="bottom-shadow-up"></div>
    <?php /** Begin Footer **/ if ($gantry->countModules('footer')) : ?>
    <div id="rt-footer">
      <div class="rt-container">
        <?php echo $gantry->displayModules('footer','standard','standard'); ?>
        <div class="clear"></div>
      </div>
    </div>
    <?php /** End Footer **/ endif; ?>
    <?php /** Begin Copyright **/ if ($gantry->countModules('copyright')) : ?>
    <div id="rt-copyright">
      <div class="rt-container">
        <?php echo $gantry->displayModules('copyright','standard','standard'); ?>
        <div class="clear"></div>
      </div>
    </div>
    <?php /** End Copyright **/ endif; ?>
  </footer>
  <?php /** End Footer Surround **/ endif; ?>
  <?php /** Begin Debug **/ if ($gantry->countModules('debug')) : ?>
  <div id="rt-debug">
    <div class="rt-container">
      <?php echo $gantry->displayModules('debug','standard','standard'); ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php /** End Debug **/ endif; ?>
  
  <?php if (!$jfmobdetect->isMobile()) { ?>
    
    <?php /** Begin JF SCROLLTOP **/ if ($gantry->countModules('jf-scrolltop')) : ?>
    <div id="jf-scrolltop">
      <?php echo $gantry->displayModules('jf-scrolltop','basic','basic'); ?>
      <div class="clear"></div>
    </div>
    <?php /** End JF SCROLLTOP **/ endif; ?>
  
    <?php /** Begin JF JS LATESTPHOTOS **/ if ($gantry->countModules('jf-js-latestphotos')) : ?>
    <div id="jf-js-latestphotos-pos">
      <?php echo $gantry->displayModules('jf-js-latestphotos','basic','basic'); ?>
      <div class="clear"></div>
    </div>
    <?php /** End JS LATESTPHOTOS **/ endif; ?>
  
  <?php } ?>
  
  <?php /** Begin JF INLOGINPOSITION **/ if ($gantry->countModules('jf-inlogin-position')) : ?>
  <div id="jf-inlogin-position">
    <?php echo $gantry->displayModules('jf-inlogin-position','basic','basic'); ?>
    <div class="clear"></div>
  </div>
  <?php /** End JS INLOGINPOSITION **/ endif; ?>
  
  <?php /** Begin JF SYSTEMMSG **/ if ($gantry->countModules('jf-system-msg')) : ?>
  <div id="jf-system-msg">
    <div class="jf-system-msg-backout"></div>
    <div class="jf-system-msg-content">
      <div class="jf-system-msg-content-ident">
        <?php echo $gantry->displayModules('jf-system-msg','basic','basic'); ?>
      </div>
      <div class="jf-system-msg-close"></div>
    </div>
  </div>
  <?php /** End JS SYSTEMMSG **/ endif; ?>
  
  <?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
  <?php echo $gantry->displayModules('analytics','basic','basic'); ?>
  <?php /** End Analytics **/ endif; ?>
    <script src="<?php echo JURI::base().'templates/'.$this->template; ?>/js/joomforest_jf_social.js" type="text/javascript"></script>
    <?php /** Begin JF Elastislide **/ if ($gantry->countModules('jf-elastislide')) : ?>
      <?php echo $gantry->displayModules('jf-elastislide','basic','basic'); ?>
    <?php /** End JF Elastislide **/ endif; ?>
    <?php /** Begin JF RECENT TWEETS **/ if ($gantry->countModules('jf-recent-tweets')) : ?>
      <?php echo $gantry->displayModules('jf-recent-tweets','basic','basic'); ?>
    <?php /** End JF RECENT TWEETS **/ endif; ?>
    <!-- START Mouse Loader -->
      <canvas id="jf_circleX" width="100" height="100"></canvas>
      <div id="jf_circlecolor"></div>
    <!-- END Mouse Loader -->
    <?php /** Begin JF RECENT TWEETS **/ if ($gantry->countModules('jf-tipsy-tooltip')) : ?>
      <?php echo $gantry->displayModules('jf-tipsy-tooltip','basic','basic'); ?>
    <?php /** End JF RECENT TWEETS **/ endif; ?>
    
  </body>
</html>
<?php
$gantry->finalize();
?>
