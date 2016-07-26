<?php

use Aura\Router\RouterContainer;
use \Zend\Diactoros\Response;
use \Zend\Diactoros\ServerRequestFactory;
use Slim\Views\PhpRenderer;

$request = ServerRequestFactory::fromGlobals(
	$_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
	);

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();

$view = new PhpRenderer(__DIR__ . '/../template/');

$map->get('home','/',function($request, $response) use ($view){
	
	return $view->render($response, 'home.phtml',[
			'test' => 'eduardo'
	]);
});

$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);

foreach($route->attributes as $key => $value){
	$request = $request->withattribute($key,$value);
}

$callable = $route->handler;

$response = $callable($request, new Response());

echo $response->getBody();
