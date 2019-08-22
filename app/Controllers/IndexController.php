<?php

namespace app\Controllers;

use MF\controller\Action;
use app\Connection;
use app\Models\Produto;

class IndexController extends Action {

	public function index() {
		// DB Connection
		$conn = Connection::getDb();

		// Model
		$produto = new Produto($conn);
		$this->view->data = $produto->getProdutos();

		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		$this->view->data = '2';
		$this->render('sobreNos', 'layout1');
	}

}

?>