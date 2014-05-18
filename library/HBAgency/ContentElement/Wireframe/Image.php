<?php

/**
 * Coded Wireframes for Contao Open Source CMS
 *
 * Copyright (C) 2014 HB Agency
 *
 * @package    Wireframes
 * @link       http://www.hbagency.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
 
 
namespace HBAgency\ContentElement\Wireframe;

use HBAgency\ContentElement\Wireframe;

/**
 * Class Image
 *
 * Front end content element "Wireframe Image".
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Wireframes
 */
class Image extends Wireframe
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_image';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
	    $arrSize = deserialize($this->wf_width_height);
		//Grab a placeholder image with that width and height
		$strSrc = "http://placehold.it/" . $arrSize[0] . "x" . $arrSize[1];
		if(!empty($this->title))
		{
    		$strSrc .= "&text=" . urlencode($this->title);
		}
		
		$this->Template->src = $strSrc;
		$this->Template->alt = specialchars($this->alt);
		$this->Template->title = specialchars($this->title);
		$this->Template->linkTitle = $this->title;
		$this->Template->addBefore = ($this->floating != 'below');
		$this->Template->margin = static::generateMargin(deserialize($this->imagemargin));
		$this->Template->caption = $this->caption;
		$this->Template->addImage = true;
	}

}