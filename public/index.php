<?php 

use Router\Router;
require '../vendor/autoload.php';
// require '../Router/Router.php';
// require '../app/Controllers/Controller.php';
// require '../app/Controllers/BlogController.php';


$router = new Router($_GET['url']);

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'laravel');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');



// definition of routes
$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/post', 'App\Controllers\BlogController@index');
$router->get('/post/:id', 'App\Controllers\BlogController@show');




$router->run();