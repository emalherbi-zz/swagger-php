<?php

defined('PS') || define('PS', PATH_SEPARATOR);
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

defined('ROOT') || define('ROOT', realpath(dirname(__FILE__)));
defined('PLUGINS') || define('PLUGINS', ROOT.DS.'vendor');

require_once PLUGINS.DS.'autoload.php';
