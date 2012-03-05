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
 * Class addthis_toolbox 
 *
 * @copyright  2011 Andreas Koob 
 * @author     Andreas Koob 
 * @package    Controller
 */
class addthis_toolbox extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'addthis_toolbox';


	/**
	 * Generate module
	 */
	protected function compile()
	{
		$this->Template->servicescheme=$this->addthis_servicescheme;
		$this->Template->username=$this->addthis_username;
		$this->Template->version=$this->addthis_version;
		if($this->addthis_trackback==1){
			$this->Template->trackback="true";
		}
		else{
			$this->Template->trackback="false";
		}
		$this->Template->setlanguage=$this->addthis_setlanguage;
		$this->Template->language=$this->addthis_language;
		$this->Template->style=$this->addthis_style;
		$services=array();
		if(!$this->addthis_servicescheme==""){
			$objServices= $this->Database->prepare("SELECT service FROM tl_addthis_service WHERE pid=?")->execute($this->addthis_servicescheme);
			while($objServices->next()){
				$services[]=array(
				'service'=>$objServices->service
				);
			}
		}
		$this->Template->services=$services;
		
	}
}

?>