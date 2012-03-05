<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    league-manager
 * @license    LGPL
 * @filesource
 */


/**
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'addthis_setlanguage';

$GLOBALS['TL_DCA']['tl_module']['palettes']['addthis_toolbox'] = '{type_legend},type,headline;{addthis_scheme},addthis_servicescheme;{addthis_settings},addthis_username,addthis_version,addthis_trackback,addthis_setlanguage,addthis_style';

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['addthis_setlanguage'] = 'addthis_language';
/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_servicescheme'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_servicescheme'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>false, 'includeBlankOption'=>true),
	'options_callback'        => array('tl_module_addthis', 'getServiceschemes')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_username'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_username'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_version'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_version'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_trackback'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_username'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_setlanguage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_setlanguage'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_style'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_style'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('addthis_default_style','addthis_button_compact'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_module']['addthis_style']['reference'],
	'eval'                    => array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['addthis_language'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addthis_language'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true)
);

class tl_module_addthis extends Backend
{
	//Lists the addthis services in the database
	public function getServiceschemes()
	{
		$arrContests = $this->Database->prepare("SELECT id, name FROM tl_addthis_servicescheme")->execute();

		if ($arrContests->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($arrContests->next())
		{
			$return[$arrContests->id] = $arrContests->name;
		}

		return $return;
	}
}

?>