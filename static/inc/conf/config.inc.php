<?php

error_reporting(E_ALL ^ E_NOTICE);

// Change assets path for library folder
$pathAssets = '';
$libAssets = '';
if(strpos($_SERVER['PHP_SELF'],"/library") !== false){
  $libAssets = '../../';
  $pathAssets = '../';	
}

require_once $libAssets.'inc/utils/Mobile_Detect.php';
$detect = new Mobile_Detect;

switch ($_SERVER['HTTP_HOST']) {
	case 'localhost':
		$google_analytics						= 'UA-XXXXXXX';
	break;
}
?>