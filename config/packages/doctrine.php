<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {

    /** @var \Config\Framework\FrameworkConfig $framework */
    $framework = $container->extensionBuilder('doctrine');


    $container->extension('doctrine', $framework->toArray());
};