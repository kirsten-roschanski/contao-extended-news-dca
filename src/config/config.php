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
 * HOOKS
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('KirstenRoschanski\NewsMetaDescription', 'addNewsMetaDescription');
