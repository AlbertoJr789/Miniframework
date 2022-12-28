<?php

namespace MF\Init;

abstract class Bootstrap {

    private $routes;

    abstract protected function initRoutes();

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes($routes){
        $this->routes = $routes;
    }

    protected function run($url){

        foreach($this->getRoutes() as $key => $route){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        }

    }

    protected function getUrl(){
        //retorna a ulr do recurso sendo solicitado na requisição
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }


}