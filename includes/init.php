<?php

//win DS = "\", Mac/Linux DS = "/"
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'fm');
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT . DS . 'includes');
defined('LAYOUT_PATH') ? null : define('LAYOUT_PATH', SITE_ROOT . DS . 'layouts');

//

$head = LAYOUT_PATH.DS."head.php";
$headermenu = LAYOUT_PATH.DS."headermenu.php";
$footer = LAYOUT_PATH.DS."footer.php";