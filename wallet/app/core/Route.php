<?php

namespace matiu\wallet\app\core;

class Route
{
    protected array $routes = [];

    public function register($route, $controller): void
    {
        $this->routes[$route] = $controller;
    }

    public function resolve($requestUri) {
        $path = parse_url($requestUri, PHP_URL_PATH);

        foreach ($this->routes as $route => $controller) {
            if ($path === $route) {
                return new $controller();
            }
        }

        return null;
    }


}