<?php
/**
 * index.php
 * 
 * Default Environment-based application loading
 * 
 * @category Nerdery-Symfony
 * @package Symfony-Standard
 * @author Maxwell Vandervelde <Maxwell.Vandervelde@nerdery.com>
 * @copyright (c) 2012-2013, The Nerdery
 * @license http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode 
 *          Attribution-NonCommercial-ShareAlike 3.0 Unported
 *          Some Rights Reserved
 */

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod'));

if (APPLICATION_ENV === 'prod') {
    require dirname(__FILE__) . '/app.php';
} elseif (APPLICATION_ENV === 'dev') {
    require dirname(__FILE__) . '/app_dev.php';
} else {
    header('HTTP/1.0 500 Internal Server Error');
    exit('Improper APPLICATION_ENV set. See ' . basename(__FILE__) . ' for more information.');
}
