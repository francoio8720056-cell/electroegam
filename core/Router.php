<?php

class Router {

    private array $routes = [];

    public function get(string $uri, string $action) {
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, string $action) {
        $this->routes['POST'][$uri] = $action;
    }

    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        // quitar /electroegam.com/public
        $base = '/electroegam.com/public';
        if (strpos($uri, $base) === 0) {
            $uri = substr($uri, strlen($base));
        }

        // NORMALIZAR URI
        if ($uri === '' || $uri === '/index.php') {
            $uri = '/';
        }

        // 🔥 ESTA LÍNEA ES LA CLAVE
        $uri = rtrim($uri, '/') ?: '/';

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo "404 - Página no encontrada ($uri)";
            return;
        }

        [$controller, $methodController] = explode('@', $this->routes[$method][$uri]);

        require_once __DIR__ . "/../controllers/$controller.php";
        $obj = new $controller;
        $obj->$methodController();
    }
}