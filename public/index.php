<?php
//define application dir and library
defined("APP_PATH") || define("APP_PATH", realpath(dirname(__FILE__) . "/../application"));
defined("LIB_PATH") || define("LIB_PATH", realpath(APP_PATH . "/../library"));
defined("APP_CONFIG") || define("APP_CONFIG", realpath(APP_PATH . "/config/app_config.php"));

//to get library dir for include path
set_include_path(implode(PATH_SEPARATOR, array(
	get_include_path(),
	realpath(LIB_PATH),
)));

//including PanjatPinang Construct
require_once "PanjatPinang/Construct.php";

//run a Construct
$app = new PanjatPinang\Construct(APP_PATH, APP_CONFIG);
$app->Run();
