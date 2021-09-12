<?php

/**
 * This is a configuration file. It defines constant values for things that may not change frequently
 */
define("WEBSITE","Zac Commerce");

// Database details
define("DB_TYPE",'mysql');
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","passme2020");
define("DB_NAME","cmszac");


define("PROTOCOL","http");

//root and asset paths
$path = str_replace("\\","/",PROTOCOL ."://". $_SERVER['SERVER_NAME']. __DIR__ ."/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'],"",$path);
define('ROOT',str_replace("app/core","public", $path));//http://localhost/zacecom/public/
define("ASSETS", str_replace("app/core","public/assets",$path)); //http://localhost/zacecom/public/assets/

//This is for debuggin purposes, will be set false on live server
define('DEBUG',true);
if(DEBUG){
    ini_set("display_errors",1);
}else{
    ini_set("display_errors",0);
}






