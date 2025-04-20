<?php
namespace Loader\Core;
require_once(__DIR__ . '/Core/functions.php');

findFile('Router.php');
$routes = require(__DIR__ . '/routes.php');

$router = new Router();
$router->routeView($_SERVER['REQUEST_URI'], $routes);
