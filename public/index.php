
<?php

/* Get the necessary elements by using namespaces (uncomment Tracy to get the Debugger) */
use App\Router;
// use Tracy\Debugger;

/* Required call to load the classes with the Composer Autoload */
require_once '../vendor/autoload.php';

/* Create the router */
$router = new Router();

/* Test Zone (uncomment Debugger to get Tracy & var_dump to get router object) */
// Debugger::enable();
// var_dump($router);

/* Run application */
$router->run();
