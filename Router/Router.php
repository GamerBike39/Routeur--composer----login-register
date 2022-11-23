<?php 

namespace Router;
// require_once "Route.php";
// use Router\Route;



class Router {

    public $url;
    public $routes = [];

    public function __construct($url) {
        $this->url = trim($url, '/');
    }

    public function get (string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function post (string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function run()
    {
        
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if($route->matches($this->url)) {
                return $route->execute();
            }
        }

        return Header('HTTP/1.0 404 Not Found');

       
    }


    

}