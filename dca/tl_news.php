<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ExtendedDCA
 * @author    Kirsten Roschanski
 * @license   LGPL
 * @copyright 2015
 */


/**
 * Show news id
 */
$GLOBALS['TL_DCA']['tl_news']['list']['sorting']['child_record_callback'] = array('tl_news_kr', 'listNewsArticles');

/**
 * Add to palettes
 */
$GLOBALS['TL_DCA']['tl_news']['palettes']['default']  = str_replace
(
  'subheadline,',
  'subheadline, meta_description,', 
  $GLOBALS['TL_DCA']['tl_news']['palettes']['default']
);
$GLOBALS['TL_DCA']['tl_news']['palettes']['internal'] = str_replace
(
  'subheadline,',
  'subheadline, meta_description,', 
  $GLOBALS['TL_DCA']['tl_news']['palettes']['internal']
);
$GLOBALS['TL_DCA']['tl_news']['palettes']['external'] = str_replace
(
  'subheadline,',
  'subheadline, meta_description,', 
  $GLOBALS['TL_DCA']['tl_news']['palettes']['external']
);

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_news']['fields']['meta_description'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_news']['meta_description'],
  'inputType'               => 'textarea',
  'eval'                    => array('tl_class'=>'clr'),
  'sql'                     => "text NULL"
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Kirsten Roschanski <https://github.com/katgirl>
 */
class tl_news_kr extends tl_news {

  /**
	 * Add the type of input field
	 * @param array
	 * @return string
	 */
	public function listNewsArticles($arrRow)	{
		return '<div class="tl_content_left"><span style="color:#A3A3A3;width:50px;display:inline-block;padding-right:3px">[ID: '.$arrRow['id'].'] </span>' . $arrRow['headline'] . ' <span style="color:#b3b3b3;padding-left:3px">[' . Date::parse(Config::get('datimFormat'), $arrRow['date']) . ']</span></div>';
	}
}  
