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
