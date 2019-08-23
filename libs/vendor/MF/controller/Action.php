<?php

namespace MF\Controller;

abstract class Action {
	protected $view;

	public function __construct() {
		$this->view = new \stdClass();
	}

	protected function render($page, $layout) {
		$this->view->page = $page;
		if(file_exists("../app/Views/" . $layout . ".phtml"))
			require_once "../app/Views/" . $layout . ".phtml";
		else
			$this->content();
	}

	protected function content() {
		$controller = get_class($this);

		$controller = str_replace('app\\Controllers\\', '', $controller);
		$controller = str_replace('Controller', '', $controller);

		require_once "../app/Views/" . $controller . "/" . $this->view->page . ".phtml";
	}
}

?>