<?php

use Router\Router;

define('DB_NAME', 'Perso');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\AppController@home');
$router->get('/portfolio', 'App\Controllers\AppController@portfolio');
$router->get('/contact', 'App\Controllers\AppController@contact');
$router->get('/about', 'App\Controllers\AppController@about');
$router->get('/cv', 'App\Controllers\AppController@cv');
$router->get('/app', 'App\Controllers\AppController@app');

$router->run();