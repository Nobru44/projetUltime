<?php 

namespace MonProjet\Controller;


use Silex\Application;


class BonjourController {
	
	public function name($name) {
	use($app) {
    return 'Hello '.$app->escape($name);
	}
}