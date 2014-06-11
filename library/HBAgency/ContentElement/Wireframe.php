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
 
 namespace HBAgency\ContentElement;
 
 use Contao\ContentElement as Contao_CE;
 
/**
 * Class Wireframe 
 *
 * Base class for Wireframe ContentElements
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Wireframes
 */
abstract class Wireframe extends Contao_CE
{

    /**
     * Initialize the content element
     * @param object
     * @param string
     */
    public function __construct($objElement, $strColumn='main')
    {
        parent::__construct($objElement);

        if (TL_MODE == 'FE') 
        {
        	//Add class 'wireframe' to any element
        	$arrNew = $this->cssID;
			$arrNew[1] .= (!empty($arrNew[1]) ? ' ' : '') .'wireframe';
			$this->cssID = $arrNew;
			
            // Load wireframe css
            $GLOBALS['TL_CSS']['wireframes']  = \Haste\Util\Debug::uncompressedFile('system/modules/wireframes/assets/css/wireframes.min.css|screen|static');
        }
    }


}