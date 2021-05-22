<?php

require __DIR__ . '/../vendor/autoload.php';

use Framework\App;
use Framework\Router\RpcRouter;
use Symfony\Component\HttpFoundation\Request;

ini_set('display_errors', true);

$request = Request::createFromGlobals();

$container = new \Auryn\Injector();

$container->share($container);

$container->share(new RpcRouter(null));

$container->alias(\Framework\Router::class, RpcRouter::class);

$app = $container->make(App::class);

$response = $app->processRequest($request);

$response->send();
