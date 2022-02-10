<?php
class Router{
    protected $routes = [
        "GET" => [],
        "POST" => []
    ];

    /**
     * Initial Route Configuration
     * @param {string} $filename
     * $filename = register routs file name
     */
    public static function load($filename){
        $router = new Router;
        require $filename;
        return $router;
    }

    /**
     * Register Routes
     * @param {array} $routes
     */
    public function register($routes){
        $this->routes = $routes;
    }

    /**
     * Setting For Get Request URL
     * @param {string} $uri
     * @param {string} $controller
     */
    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Setting For POST Request URL
     * @param {string} $uri
     * @param {string} $controller
     */
    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Redirect to controller by request URI
     * @param {string} $uri
     * @param {string} $method 
     * $uri = request uri
     * $method = request uri method(get or post)
     */
    public function direct($uri, $method) {
        if(array_key_exists($uri, $this->routes[$method])){
            return $this->routes[$method][$uri];
        }
        die("404 page");
    }
}