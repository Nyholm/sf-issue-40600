<?php

use Symfony\Config\DoctrineConfig;

return static function (DoctrineConfig $doctrine) {
    $dbal = $doctrine->dbal();
    $dbal->type('custom_first')->class(CustomFirst::class);
    $dbal->type('custom_second')->class(CustomSecond::class);
};