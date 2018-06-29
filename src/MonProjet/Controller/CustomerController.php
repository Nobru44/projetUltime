<?php 

namespace MonProjet\Controller;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use MonProjet\Model\CustomersModel;
use MonProjet\Model\DatabaseModel;


class CustomerController {

	

	public function main(Application $app, Request $request) {
		
		$country =$request->query->get('country');
		$customers = new CustomersModel();
		var_dump($customers);
		var_dump($country);

		$customersList = $customers->getCustomersByCountry($country);
		
		return $app['twig']->render('customer.twig', array('customersList' => $customersList));

	}
}