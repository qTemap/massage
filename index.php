<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

require_once(ROOT.'/component/Router.php');
require_once(ROOT.'/component/cook.php');

$router = new Router();
$router->run();

?>