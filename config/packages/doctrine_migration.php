<?php

declare(strict_types=1);

use Symfony\Config\DoctrineMigrations\DoctrineMigrationsConfig;

return static function (DoctrineMigrationsConfig $doctrine) {
    $doctrine->migrationsPath('DoctrineMigrations', '%kernel.project_dir%/migrations');
};
