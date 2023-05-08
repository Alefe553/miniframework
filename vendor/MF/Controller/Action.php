<?php
namespace MF\Controller;

abstract class Action {
    
    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    }


    protected function render($view, $layout) {
        $this->view->page = $view;
        require_once "../App/Views/".$layout.".phtml";
    }

    protected function content() {
        $classeAtual = get_class($this);

        $classAtual = str_replace('App\\Controllers\\', '', $classeAtual);

        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        require_once '../App/Views/'.$classAtual.'/'.$this->view->page.'.phtml';
    }

}
?>