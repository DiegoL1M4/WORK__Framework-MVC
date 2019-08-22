<?php

namespace app;

use MF\init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'IndexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'IndexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes( $routes );
	}

}

?>