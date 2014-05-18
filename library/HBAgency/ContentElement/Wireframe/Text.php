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
 * Class Text
 *
 * Front end content element "Wireframe Text".
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Wireframes
 */
class Text extends Wireframe
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_text';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{	
		$strBaseUri = "http://loripsum.net/api";
		
		if($this->wf_text_paragraphs != '' && intval($this->wf_text_paragraphs) > 0)
		{
			$strBaseUri .= "/" . intval($this->wf_text_paragraphs);
		}
		if($this->wf_text_length != '')
		{
			$strBaseUri .= "/" . substr($this->wf_text_length, 0, -3);
		}
		
		$strCacheKey = substr(md5($strBaseUri), 0, 12);
		$strContent = '';
		
		if(!file_exists(TL_ROOT . '/assets/wireframes/text/' . $strCacheKey . '.txt'))
		{
			//Cache the text
			$strContent = file_get_contents($strBaseUri);
			$objFile = new \File('assets/wireframes/text/' . $strCacheKey . '.txt');
			$objFile->write($strContent);
			$objFile->close();
		}
		else
		{
			$strContent = file_get_contents(TL_ROOT . '/assets/wireframes/text/' . $strCacheKey . '.txt');
		}
		
		$this->Template->text = $strContent;
			
		if($this->addPlaceholderImage)
		{
		    $arrSize = deserialize($this->wf_width_height);
			//Grab a placeholder image with that width and height
			$strSrc = "http://placehold.it/" . $arrSize[0] . "x" . $arrSize[1];
			if($this->title != '')
			{
	    		$strSrc .= "&text=" . urlencode($this->title);
			}
			// Float image
			if ($this->floating != '')
			{
				$this->Template->floatClass = ' float_' . $this->floating;
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

}