<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Connection;
use App\Models\Produto;

class IndexController extends Action {


    public function index(){
        
        $produto = Container::getModel('Produto'); 
        $this->view->dados = $produto->getProdutos();
        $this->render('index','layout');
    }

    public function sobreNos(){
        $this->render('sobreNos');    
    }

}

?>