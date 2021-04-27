<?php

declare(strict_types=1);

use Symfony\Config\FrameworkConfig;


return static function (FrameworkConfig $framework) {
        $framework->lock()
            ->resource('invoice', ['semaphore', 'redis://r2.docker'])
            ->resource('report', ['semaphore']);
        ;
    };

