<?php

use Router\Router;

require '../vendor/autoload.php';

define('DB_NAME', 'site');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', '');


define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\AppController@home');
$router->get('/portfolio', 'App\Controllers\AppController@portfolio');
$router->get('/contact', 'App\Controllers\AppController@contact');
$router->get('/about', 'App\Controllers\AppController@about');

$router->run();