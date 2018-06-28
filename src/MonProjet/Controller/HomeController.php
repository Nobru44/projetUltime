<?php 

namespace MonProjet\Controller;


use Silex\Application;


class HomeController {
	public function main(Application $app) {

		$name = 'Bruno';
		return $app['twig']->render('home.twig', 
		array('name' => $name));

	}
}