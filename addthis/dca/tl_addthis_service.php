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
 * Table tl_addthis_service 
 */
$GLOBALS['TL_DCA']['tl_addthis_service'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_addthis_servicescheme',
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('serviceorder'),
			'flag'                    => 1,
			'disableGrouping'         => true,
			'headerFields'            => array('name'),
			'child_record_callback'   => array('tl_addthis_service', 'listService')
		),
		'label' => array
		(
			'fields'                  => array('service'),
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_addthis_service']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_addthis_service']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_addthis_service']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_addthis_service']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'service'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'service' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_addthis_service']['service'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('mandatory'=>true),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_addthis_service']['service']['reference'],
			'options'				  => array('facebook','meinvz','studivz','email','twitter')
		),
		'serviceorder' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_addthis_service']['serviceorder'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true),
			'save_callback' => array
			(
				array('tl_addthis_service', 'getOrderno')
			)
		)
	)
);


class tl_addthis_service extends Backend
{
	public function listService($arrRow)
	{
	return '<div>' . $GLOBALS['TL_LANG']['tl_addthis_service']['service']['reference'][$arrRow['service']] . '</div>' . "\n";
	}
	
	
	public function getOrderno($varValue, DataContainer $dc)
	{
		$arrRounds = $this->Database->prepare("SELECT max(serviceorder) AS maxorder FROM tl_addthis_service WHERE pid=?")->execute($dc->activeRecord->pid);
		$varValue= $arrRounds->maxorder+1;
		
		return $varValue;
	}
}
?>