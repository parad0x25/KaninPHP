<?php

try {

//admincp directory
define('__ADMINCP__','admincp');
// Global Paths
define('HTTP_HOST', isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'CLI');
define('SERVER_PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ) ? 'https://' : 'http://');
define('__ROOT_DIR__', rtrim(str_replace('\\','/', dirname(__DIR__)), '/') . '/');
define('__RELATIVE_ROOT__', rtrim((access == __ADMINCP__ ? dirname(dirname($_SERVER['SCRIPT_NAME'])) : dirname($_SERVER['SCRIPT_NAME'])), '\/') . '/');
#for linux or cPanel
define('__BASE_URL__', SERVER_PROTOCOL.HTTP_HOST.__RELATIVE_ROOT__);

// Private Paths
define('__PATH_SYSTEM__', __ROOT_DIR__.'system/');
define('__PATH_CLASSES__', __PATH_SYSTEM__.'classes/');
define('__PATH_TEMPLATES__', __ROOT_DIR__.'themes/');
define('__PATH_LANGUAGES__', __PATH_SYSTEM__ . 'languages/');
define('__PATH_FUNCTIONS__', __PATH_SYSTEM__.'functions/');
define('__PATH_API__', __PATH_SYSTEM__.'api/');
define('__PATH_MODULES__', __PATH_SYSTEM__.'modules/');
define('__PATH_MODULES_USERCP__', __PATH_MODULES__.'usercp/');
define('__PATH_EMAILS__', __PATH_SYSTEM__.'emails/');
define('__PATH_CACHE__', __PATH_SYSTEM__.'cache/');


} catch (Exception $ex) {

}
