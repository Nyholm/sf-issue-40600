<?php

declare(strict_types=1);

use Happyr\CS\Config;

if (!\class_exists(Config::class)) {
    die('You need to install happyr/coding-standard. See https://gitlab.com/happyr/coding-standard');
}

return (new Config([
        'phpdoc_to_comment' => false, /* Will make sure we can use php-translation's @Ignore */
        'final_internal_class' => false,
    ]))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')

            ->name('*.php')
    );
