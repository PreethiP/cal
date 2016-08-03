<?php
/**
 * No Right Click, No Copy
 *
 * @package No Right Click, No Copy
 * @subpackage No Right Click, No Copy
 * @version   1.0.0
 * @author    http://www.contona.com
 * @copyright Copyright (C) 2012-13, www.contona.com
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 */
 
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$doc = &JFactory::getDocument();

$doc->addScriptDeclaration("document.oncontextmenu=new Function('return false');
document.onselectstart=new Function ('return false');
if (window.sidebar){
document.onmousedown=new Function('return false'); 
document.onclick=new Function('return true') ; 
document.oncut=new Function('return false'); 
document.oncopy=new Function('return false'); 
document.onpaste=new Function('return false'); 
}");

?>
