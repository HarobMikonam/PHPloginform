<?php
namespace Loader\Core;
require(__DIR__ . '/Core/functions.php');

findFile('Router.php');
$routes = require(__DIR__ . '/routes.php');

$router = new Router();
$router->route($_SERVER['REQUEST_URI'], $routes);
