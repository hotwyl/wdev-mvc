<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Controller\Pages\Home;

define('URL','http://localhost/projetos/php/wdevmvc');

$obRouter = new Router(URL);
echo '<pre>';
print_r($obRouter);
echo '</pre>';
exit;

echo Home::getHome();
