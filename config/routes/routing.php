<?php

use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    if ($routes->env() === 'dev') {
        $routes->add('debug-stats', '/blog-debyg')
            ->controller([BlogController::class, 'debug'])
        ;
    }

    $routes->add('blog_list', '/blog')
        ->controller([BlogController::class, 'list'])
    ;
};