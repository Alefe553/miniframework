<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Product;
use App\Models\Info;

class IndexController extends Action {

    public function index() {
        $product = Container::getModel('Product');

        $this->view->dados = $product->getProducts();

        $this->render('index', 'layout');
    }

    public function sobreNos() {
        $info = Container::getModel('Info');
        
        $this->view->dados = $info->getInfo();
        $this->render('sobreNos', 'layout');
    }

}

?>