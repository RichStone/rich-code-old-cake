<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'LibelliSchminken',
    ['path' => '/libelli-schminken'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
