<?php

declare(strict_types=1);

use Symfony\Config\Framework\FrameworkConfig;

return static function (FrameworkConfig $framework) {
    $framework->lock()
        ->resource('acme', ['%env(LOCK_DSN)%']);

};
