<?php
class Router{
    protected $routes = [];

    // setting for routing configuration
    public static function load($filename){
        $router = new Router;
        require $filename;
        return $router;
    }

    // setting for routes configuration
    public function register($routes){
        $this->routes = $routes;
    }

    // by uri by routing controller
    public function direct($uri) {
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
    }
}