<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'MailCalculator',
    ['path' => '/mail-calculator'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
