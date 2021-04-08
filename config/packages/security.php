<?php

declare(strict_types=1);

use Symfony\Config\SecurityConfig;

return static function (SecurityConfig $security) {
    $security
        ->roleHierarchy('ROLE_ADMIN', ['ROLE_USER'])
        ->roleHierarchy('ROLE_SUPER_ADMIN', ['ROLE_ADMIN', 'ROLE_ALLOWED_TO_SWITCH'])
        ->accessControl()
            ->path('^/user')
            ->role('ROLE_USER');

    $security->accessControl(['path' => '^/admin', 'roles' => 'ROLE_ADMIN']);
    $security->firewall('main')
        ->pattern('^/*')
        ->lazy(true)
        ->anonymous();

};
