<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    /** @var \Config\Framework\FrameworkConfig $framework */
    $framework = $container->extensionBuilder('framework');
    $framework->addLock()
        ->addResource('acme', ['%env(LOCK_DSN)%']);


    $container->extension('framework', $framework->toArray());
};
