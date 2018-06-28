<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application;

$app['debug'] = true;

$app->get('/', 'MonProjet\Controller\HomeController::main');


$app->get('/hello', function() use ($app) {

    return 'Hello world';

});





$app->get('/bonjour', function() use ($app) {

    return 'Hello world';

});


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->run();