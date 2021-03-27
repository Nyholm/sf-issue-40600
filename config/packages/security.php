<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    /** @var \Config\Security\SecurityConfig $security */
    $security = $container->extensionBuilder('security');
    $security
        ->addRoleHierarchy('ROLE_ADMIN', ['ROLE_USER'])
        ->addRoleHierarchy('ROLE_SUPER_ADMIN', ['ROLE_ADMIN', 'ROLE_ALLOWED_TO_SWITCH'])
        ->addAccessControl()
            ->setPath('^/user')
            ->addRole('ROLE_USER');

    $security->addAccessControl(['path' => '^/admin', 'roles' => 'ROLE_ADMIN']);
    $security->addFirewall('main')
        ->setPattern('^/*')
        ->setLazy(true)
        ->addAnonymous();

    $container->extension('security', $security->toArray());
};
