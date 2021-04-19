<?php

use Symfony\Config\DoctrineConfig;

return static function (DoctrineConfig $doctrine) {
    $x = 2;
    $doctrine
        ->dbal()
            ->connection('bar')
                ->overrideUrl(true)
                ->url('%env(resolve:DATABASE_URL)%');
};