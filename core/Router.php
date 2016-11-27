<?php

namespace Core;

class Router
{
    protected $routes = [];

    public static function init($fileName)
    {
        $router = new static;

        require $fileName . '.php';

        return $router;
    }

    public function define(array $routeList)
    {
        $this->routes = $routeList;
    }

    public function load($url)
    {
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        }
        
        throw new \Exception('No route found');
    }
}