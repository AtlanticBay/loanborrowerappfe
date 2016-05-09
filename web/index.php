<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->get('/test', function() use ($app)
{
	return $app->json(array('Silex is working.'));
});

$app->get('/', function() use ($app)
{
	return $app['twig']->render('home.twig', array());
});

$app->get('/hello/{name}', function ($name) use ($app)
{
    return $app['twig']->render('hello.twig', array(
        'name' => $name,
    ));
});

$app->run();
?>