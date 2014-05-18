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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addPlaceholderImage'; 

$GLOBALS['TL_DCA']['tl_content']['palettes']['wfimage']    = '{type_legend},type,headline;{image_legend},wf_width_height,alt,title,imagemargin,imageUrl,caption;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['wfcircle']    = '{type_legend},type,headline;{image_legend},wf_width_height,alt,title,imagemargin,imageUrl,caption;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['wftext']     = '{type_legend},type,headline;{text_legend},wf_text_paragraphs,wf_text_length;{image_legend},addPlaceholderImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addPlaceholderImage'] = 'wf_width_height,alt,title,imagemargin,imageUrl,caption,floating';
 
/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['wf_width_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['wf_width_height'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'mandatory' => true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['wf_text_paragraphs'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['wf_text_paragraphs'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['wf_text_length'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['wf_text_length'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('shorttxt', 'mediumtxt', 'longtxt', 'verylongtxt'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['addPlaceholderImage'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addPlaceholderImage'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);