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
    public function route($uri, $route)
    {
        if (array_key_exists($uri, $route)) {
            require(dirname(__DIR__) . '/View' . $route[$uri]);
            return;
        }
        require(dirname(__DIR__) . '/View/404.view.php');
        exit();
    }
}