<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application;

$app['debug'] = true;


use Symfony\Component\HttpFoundation\Request;

$app->register(new Silex\Provider\AssetServiceProvider());


$app->get('/', 'MonProjet\Controller\HomeController::main');

$app->get('/customer', 'MonProjet\Controller\CustomerController::main')
->bind('customer');


$app->get('/hello', function() use ($app) {

    return 'Hello world';

})->bind('hello');




$app->get('/bonjour{name}', function($name) use ($app) {

    return 'Bonjour '.$app->escape($name);
})->bind('bonjour');



$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));




$app->run();