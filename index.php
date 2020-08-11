<?php
/**
 * PHP versions 7.0+
 *
 * Kanin.PHP(tm) : Application Framework
 * Copyright 2020, Indevfinite Software Foundation, Inc. (https:/indevfinite.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2020, Indevfinite Software Foundation, Inc. (https:/indevfinite.com)
 * @link          Kanin.PHP Project
 * @package       Kanin
 * @subpackage    Kanin Appplication framework
 * @since         Kanin.PHP v0.0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);


if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
     return false;
}

require 'public' . DIRECTORY_SEPARATOR . 'index.php';