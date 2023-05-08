<?php
namespace MF\Init;

abstract class Bootstrap {

    //Iniciando o valor das rotas
    private $routes;

    //Método construtor da classe
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    //Método getter
    public function getRoutes() {
        return $this->routes;
    }
    
    //Método setter
    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    //Iniciando as rotas
    protected function run($url) {
        foreach($this->getRoutes() as $key => $route) {
            if($url == $route['route']) {
                $class = "App\\controllers\\".ucfirst($route['controller']);

                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        }
    }
    

    /*
        Resgatando o endereço da página atual.
        Isto server para que ocorra um funcionamento dinâmico da aplicação
    */
    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    //Método para ser implementado
    abstract protected function initRoutes();
}


?>