<?php
/**
 * JF Library
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.plugin.plugin' );

	class plgSystemJfLibrary extends JPlugin {
	
		public function __construct( & $subject, $config ) {
			parent::__construct($subject, $config);
			$this->loadLanguage();
			$app = JFactory::getApplication();
			$this->_jqpath = '';
			if($app->isAdmin())return;
		}
		
		function onAfterInitialise() {
			if(JFactory::getApplication()->isAdmin())return;
			$doc =& JFactory::getDocument();
			
			$jflib_jquery_v		 = $this->params->get('jflib_jquery_v','1.7.2');
			$jflib_source		 = $this->params->get('jflib_source','google');
			$jflib_protocol		 = $this->params->get('jflib_protocol','http');
			$jflib_noConflict	 = $this->params->get('jflib_noConflict',1);

			$jflib_selectedMenus = $this->params->get('menuItems','');
			$jflib_itemid		 = JRequest::getInt('Itemid');
			if(!$jflib_itemid) $jflib_itemid = 1;
			if (is_array($jflib_selectedMenus)){
				$jflib_menus = $jflib_selectedMenus;
			} elseif (is_string($jflib_selectedMenus) && $jflib_selectedMenus!=''){
				$jflib_menus[] = $jflib_selectedMenus;
			} elseif ($jflib_selectedMenus == ''){
				$jflib_menus[] = $jflib_itemid;
			}
			$jflib_pl_root			 = JURI::root (true).'/plugins/system/jflibrary/';
			$jflib_pl_js_root		 = $jflib_pl_root.'js/';

			$document			 =& JFactory::getDocument();
			if(in_array($jflib_itemid,$jflib_menus)){
				
				if((JFactory::getApplication()->get('jquery') == false) && ($jflib_jquery_v !=="disable")) {
					
					JFactory::getApplication()->set('jquery', true);
					$jflib_removeMoo = $this->params->get('jflib_removeMoo',0);
					$jflib_removeMooMore = $this->params->get('jflib_removeMooMore',0);
					
					if (!$jflib_removeMoo){
						$document->addScript(JURI::root(true).'/media/system/js/mootools-core.js');
						$document->addScript(JURI::root(true).'/media/system/js/core.js');
					}
					
					if (!$jflib_removeMooMore){
						$document->addScript(JURI::root(true).'/media/system/js/mootools-more.js');
					}
					
					if ($jflib_jquery_v == 'latest'){
							$this->_jqpath = $jflib_protocol.'://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js';
							$document->addScript($this->_jqpath); 
					} else {
						if ($jflib_source == 'local'){
							$this->_jqpath = $jflib_pl_js_root . 'jquery-'.$jflib_jquery_v.'.min.js';
						}
						if ($jflib_source == 'google'){
							$this->_jqpath = $jflib_protocol.'://ajax.googleapis.com/ajax/libs/jquery/'.$jflib_jquery_v.'/jquery.min.js';
						}
						$document->addScript($this->_jqpath);	
					}
					if (!($jflib_jquery_v == "disable") and $jflib_noConflict){
						$document->addScript($jflib_pl_root.'js/jquery.noconflict.js');
					}
				}
			}	   	
		}
		
		function onAfterRender() {
			if(JFactory::getApplication()->isAdmin()){return;}	
			$jflib_jquery_regex		= $this->params->get('jflib_jquery_regex','([\/a-zA-Z0-9_:\.-]*)jquery([0-9\.-]|min|pack)*?.js');
			$jflib_jquery_uniq		= $this->params->get('jflib_jquery_uniq',0);
			$jflib_custom_remove	= $this->params->get('jflib_custom_remove',0);
			$jflib_custom_scripts	= $this->params->get('jflib_custom_scripts','');
			$jflib_removeMoo		= $this->params->get('jflib_removeMoo',0);
			$jflib_removeMooMore	= $this->params->get('jflib_removeMooMore',0);

			$body =& JResponse::getBody();
			if($jflib_removeMoo){
				$body = preg_replace("#([\/a-zA-Z0-9_:\.-]*)mootools-core.js#", "", $body);
				$body = preg_replace("#([\/a-zA-Z0-9_:\.-]*)caption.js#", "", $body);
				$body = str_ireplace('<script src="" type="text/javascript"></script>', "", $body);
				$body = preg_replace('%window\.addEvent\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $body);
			}
			if($jflib_removeMooMore){
				$body = preg_replace("#([\/a-zA-Z0-9_:\.-]*)mootools-more.js#", "", $body);
				$body = str_ireplace('<script src="" type="text/javascript"></script>', "", $body);
			}

			if($jflib_jquery_uniq && $jflib_jquery_regex){
				if ($this->_jqpath != ''){$body = preg_replace("#$jflib_jquery_regex#", "JQLIB", $body, 1);}
				$body = preg_replace("#$jflib_jquery_regex#", "", $body);
				$body = str_ireplace('<script src="" type="text/javascript"></script>', "", $body);
				$body = preg_replace("#jQuery\.noConflict\(\);#", "", $body);
				$body = preg_replace("#JQLIB#", $this->_jqpath, $body);
			}
			if($jflib_custom_remove && ($jflib_custom_scripts != '')){
				$jflib_custom_scripts = preg_split("/[\s,]+/", trim($jflib_custom_scripts));
				foreach($jflib_custom_scripts as $scriptName){
					$scriptRegex = "([\/a-zA-Z0-9_:\.-]*)".trim($scriptName);
					$body = preg_replace("#$scriptRegex#", "", $body);
				}
				$body = str_ireplace('<script src="" type="text/javascript"></script>', "", $body);
			}

			$scripts = '';
				
			$body = str_replace ("</body>", $scripts."</body>", $body);
			JResponse::setBody($body);
			return true;
		}
	}
?>