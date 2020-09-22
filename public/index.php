<?php

use Router\Router;

require '../vendor/autoload.php';

define('DB_NAME', 'dbs217388');
define('DB_HOST', 'db5000390541.hosting-data.io');
define('DB_USER', 'dbu186565');
define('DB_PWD', 'Xorph91340*');


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