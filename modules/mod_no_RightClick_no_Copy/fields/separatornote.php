<?php/** * No Right Click, No Copy * * @package No Right Click, No Copy * @subpackage No Right Click, No Copy * @version   1.0.0 * @author    http://www.contona.com * @copyright Copyright (C) 2012-13, www.contona.com * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only * */
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.html.html');
jimport('joomla.form.formfield');

class JFormFieldSeparatornote extends JFormField {
	protected $type = 'Separatornote'; //the form field type
	protected function getInput() {
        return '<span style="background: none repeat scroll 0 0 #696969;    color: #FFFFFF;    float: left;    font-size: 12px;    margin: 0 0 6px;    padding: 3px 3px 4px;    text-align: center;    width: 100%;">' . JText::_($this->element['description']) . '</span>';
    }
}