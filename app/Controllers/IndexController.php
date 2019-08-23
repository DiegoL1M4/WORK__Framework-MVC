<?php

namespace app\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use app\Models\Produto;
use app\Models\Info;

class IndexController extends Action {

	public function index() {
		
		// Model
		$produto = Container::getModel('Produto');
		$this->view->data = $produto->getProdutos();

		$this->render('index', 'layout1');
	}

	public function sobreNos() {


		// Model
		$info = Container::getModel('Info');
		$this->view->data = $info->getInfo();

		$this->render('sobreNos', 'layout1');
	}

}

?>