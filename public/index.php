<?php 

use Router\Router;
require_once '../vendor/autoload.php';
require '../Router/Router.php';
require '../app/Controllers/Controller.php';
require '../app/Controllers/BlogController.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/post/:id', 'App\Controllers\BlogController@show');

$router->run();