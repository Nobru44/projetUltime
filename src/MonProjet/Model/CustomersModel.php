<?php

namespace MonProjet\Model;

use MonProjet\Model\DatabaseModel; 


class CustomersModel {
	public function getCustomersByCountry($country) {
		$db = new DatabaseModel();

		$sql = "SELECT * FROM customers WHERE country LIKE ?";
		$params = [$country];
		$customers = $db->query($sql, $params);
		return $customers;
 	}
}