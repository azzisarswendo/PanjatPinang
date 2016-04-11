<?php

namespace PanjatPinang;

/**
* for run PanjatPinang programs to load all classes
*/
class Construct {
	
	public function __construct($APP_PATH, $APP_CONFIG){
		require_once "Construct/Autoload.php";
		$GLOBALS["APP_PATH"] = $APP_PATH;
		$GLOBALS["APP_CONFIG"] = $APP_CONFIG;
	}

	public function Run(){
		
	}
}