<?php

/**
 * Bright Cloud Studio's Contao Redirect Failed Login
 *
 * Copyright (C) 2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/contao-redirect-failed-login
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

 /* Extend the tl_module palettes */
$GLOBALS['TL_DCA']['tl_module']['palettes']['login'] = str_replace(',redirectBack;', ',jumpToFailed,redirectBack;', $GLOBALS['TL_DCA']['tl_module']['palettes']['login']);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_issue'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_module']['jumpToFailed'],
  'inputType'               => 'pageTree',
  'foreignKey'              => 'tl_page.title',
  'eval'                    => array('fieldType'=>'radio'),
  'sql'                     => "int(10) unsigned NOT NULL default 0",
  'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
);
