<?php
session_start();
//error display
if(!ini_get('display_errors')){
	ini_set('display_errors', 'off');
}
// error_reporting(E_ALL^E_STRICT^E_NOTICE); //^E_NOTICE
error_reporting(E_ALL^E_NOTICE);
header('Content-type:text/html;charset=utf-8');


define('ROOT_PATH',dirname(__DIR__));
require ROOT_PATH . '/configs/profile.inc.php';
require ROOT_PATH . '/smarty/Smarty.class.php';

spl_autoload_register('__autoload');
function __autoload($_className){
	if(substr($_className,-5)=='Model'){
		require ROOT_PATH.'/model/'.$_className.'.class.php';
	}elseif(substr($_className,-6)=='Action'){
		require ROOT_PATH.'/controller/'.$_className.'.class.php';
	}elseif(substr($_className,-5)=='Check'){
		require ROOT_PATH.'/check/'.$_className.'.class.php';
	}else{
		require ROOT_PATH.'/public/'.ucfirst($_className).'.class.php';
	}
}


$tpl = TPL::getInstance();

Factory::setAction()->run();
?>