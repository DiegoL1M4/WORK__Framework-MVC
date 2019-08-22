<?php

namespace app\Controllers;

use MF\controller\Action;

class IndexController extends Action {

	public function index() {
		$this->view->data = '1';
		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		$this->view->data = '2';
		$this->render('sobreNos', 'layout1');
	}

}

?>