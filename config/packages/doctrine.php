<?php

use Symfony\Config\Doctrine\DoctrineConfig;

return static function (DoctrineConfig $doctrine) {
    $doctrine
        ->dbal()
            ->connection('default')
                ->overrideUrl(true)
                ->url('%env(resolve:DATABASE_URL)%');
};