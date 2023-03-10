<?php

namespace MF\Controller;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    protected function render($view,$layout = null){
        $this->view->page = $view;
        if(file_exists("../App/Views/".$layout.".phtml")){
            require_once "../App/Views/" . $layout . ".phtml";
        }else{
            $this->content();
        }
    }

    protected function content(){
        $classPath = str_replace('Controller','',str_replace('App\\Controllers\\', '',get_class($this)));        
        require_once "../App/Views/". $classPath . "/" . $this->view->page . ".phtml";
    }

}