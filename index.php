<?php 

ini_set('display_errors',1);
error_reporting(E_ALL);
define('ROOT',dirname(__FILE__));
require_once('/components/Router.php');
  session_start();
//require_once('/config/DB.php');
$route=new Router;
$route->run();