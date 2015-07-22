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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'KirstenRoschanski',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'KirstenRoschanski\NewsMetaDescription' => 'system/modules/kirsten-roschanski-extended-news-dca/library/KirstenRoschanski/NewsMetaDescription.php',
));
