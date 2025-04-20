<?php

namespace Loader\Core;

class Router
{
    /**
     * Includes the appropriate view file based on the current URI.
     *
     * @param string $uri The current request URI (e.g., "/about").
     * @param array $route An associative array mapping URIs to view file paths (relative to the View directory).
     *
     * @return void
     *
     * If a matching route is found, the corresponding view file is included.
     * Otherwise, the 404 view is served.
     */
    public function routeView($uri, $route)
        //TODO: improve router, make it so i can select specific directories within the entire project folder. add variables $URI, $ROUTE, $DIR.
    {
        if (array_key_exists($uri, $route)) {
            require(dirname(__DIR__) . $route[$uri]);
            return;
        }
        require(dirname(__DIR__) . '/View/404.view.php');
        exit();
    }
}

