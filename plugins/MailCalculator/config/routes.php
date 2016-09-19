<?php
use Cake\Routing\Router;

Router::plugin('MailCalculator', function ($routes) {
    $routes->fallbacks('DashedRoute');
});

Router::scope('/mail_calculator', ['plugin' => 'MailCalculator'], function ($routes) {
    $routes->connect('/', ['controller' => 'PostalServices']);
});