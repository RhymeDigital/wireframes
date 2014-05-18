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
 
 
/*
 * Content elements
 */
array_insert($GLOBALS['TL_CTE'], 4, array
(
	'wireframes' => array
    (
        'wftext'    => '\HBAgency\ContentElement\Wireframe\Text',
        'wfimage'   => '\HBAgency\ContentElement\Wireframe\Image',
        'wfcircle'  => '\HBAgency\ContentElement\Wireframe\Circle',
    ),
));
