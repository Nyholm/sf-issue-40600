<?php

use Symfony\Config\Framework\FrameworkConfig;

return static function (FrameworkConfig $framework) {
    $framework->secret('%env(APP_SECRET)%');
    $framework->httpMethodOverride(false);

    $framework->session()->handlerId(null);
    $framework->session()->cookieSecure('auto');
    $framework->session()->cookieSamesite('lax');

    $framework->phpErrors(['log' => true]);
};