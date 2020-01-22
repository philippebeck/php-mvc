
<?php

use App\Router;
//use Tracy\Debugger;

require_once '../vendor/autoload.php';

//Debugger::enable();

$router = new Router();
$router->run();
