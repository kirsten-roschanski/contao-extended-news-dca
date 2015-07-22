<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ExtendedNewsDCA
 * @author    Kirsten Roschanski
 * @license   LGPL
 * @copyright 2015
 */

 /**
 * Namespace
 */
namespace KirstenRoschanski;

/**
 * Class NewsMetaDescription
 *
 * @copyright  Kirsten Roschanski 2015
 * @author     Kirsten Roschanski
 * @package    ExtendedNewsDCA
 */
class NewsMetaDescription extends \Frontend
{
	public function addNewsMetaDescription($objPage, $objLayout, $objPageRegular)
	{

    // Set the item from the auto_item parameter
		if (!isset($_GET['items']) && \Config::get('useAutoItem') && isset($_GET['auto_item']))
		{
			\Input::setGet('items', \Input::get('auto_item'));
		}

    //check news
    if (!\Input::get('items')){
			return;
		}

		$objArticle = \Database::getInstance()
                  ->prepare("SELECT headline, meta_description FROM tl_news WHERE alias=? AND published=1")
									->limit(1)
									->execute(\Input::get('items'));

		//no news found
    if ($objArticle->numRows < 1){
			return;
		}

    //not a new description
		if ($objArticle->meta_description != '') {
      $objPage->description = $objArticle->meta_description;
		}

    // Set the title as title
		if ($objArticle->headline != '') {
      $objPage->title = $objArticle->headline;
		}
	}
}
