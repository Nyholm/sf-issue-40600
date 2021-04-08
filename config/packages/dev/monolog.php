<?php
use Symfony\Config\MonologConfig;

return static function (MonologConfig $monolog) {

    $handler = $monolog->handler('main')
        ->type('fingers_crossed')
        ->handler('nested')
    ;
    $handler->excludedHttpCode()->code('404');
    $handler->excludedHttpCode()->code('405');

    $monolog->handler('nested')
        ->type('stream')
        ->path('php://strerr')
        ->level('debug')
        ->channels(['elements' => ['!event']]);
};

/*
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    $container->extension('monolog', [
        'handlers' => [
            'main' => [
                'type' => 'fingers_crossed',
                'handler' => 'nested',
                'excluded_http_codes' => [403, 404],
            ],
            'nested' => [
                'type' => 'stream',
                'path' => 'php://stderr',
                'level' => 'debug',
                'channels' => ['!event'],
            ]
        ],
    ]);
};
*/