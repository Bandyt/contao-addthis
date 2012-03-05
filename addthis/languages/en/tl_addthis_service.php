<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2011 Andreas Koob 
 * @author     Andreas Koob 
 * @package    addthis 
 * @license    LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_addthis_service']['service'] = array('Service', 'The service you want to use in the scheme.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_addthis_service']['service']['reference'] = array('fb'=>'Facebook','meinvz'=>'MeinVZ','studivz'=>'StudiVZ','email'=>'EMail','twitter'=>'Twitter'); 

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_addthis_service']['new']    = array('Add Service', 'Adds a new service to the scheme.');
$GLOBALS['TL_LANG']['tl_addthis_service']['edit']   = array('Edit Service', 'Changes the selected service.');
$GLOBALS['TL_LANG']['tl_addthis_service']['copy']   = array('Copy Service', 'Creates a copy of the selected service.');
$GLOBALS['TL_LANG']['tl_addthis_service']['delete'] = array('Delete Service', 'Removes the service from the scheme.');
$GLOBALS['TL_LANG']['tl_addthis_service']['show']   = array('Show Service', 'Displays the service.');

?>