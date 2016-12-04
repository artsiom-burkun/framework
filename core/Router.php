<?php

namespace Core;

class Router
{
    protected $routes = [
        'POST' => [],
        'GET' => []
    ];

    public static function init($fileName)
    {
        $router = new static;

        require $fileName . '.php';

        return $router;
    }

    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller)
    {
        $this->routes['POST'][$url] = $controller;
    }

    public function define(array $routeList)
    {
        $this->routes = $routeList;
    }

    public function load($url)
    {

        if (array_key_exists($url, $this->routes[strtoupper($_SERVER['REQUEST_METHOD'])])) {
            return $this->callController(...explode('@', $this->routes[strtoupper($_SERVER['REQUEST_METHOD'])][$url]));
            // return $this->routes[strtoupper($_SERVER['REQUEST_METHOD'])][$url];
        }
        
        throw new \Exception('No route found');
    }

    private function callController($controller, $action)
    {
        $controller = "\\App\\{$controller}";
        $class = new $controller;

        $class->$action();
    }
}