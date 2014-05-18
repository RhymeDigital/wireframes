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
 
 
/**
 * Register PSR-0 namespace
 */
NamespaceClassLoader::add('HBAgency', 'system/modules/wireframes/library');


/**
 * Register classes outside the namespace folder
 */
NamespaceClassLoader::addClassMap(array
(
    
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	//Content elements
	//'ce_foundation_sidenav' 	    => 'system/modules/zurb_foundation/templates/elements',    	
));
