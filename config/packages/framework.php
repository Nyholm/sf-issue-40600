<?php

use Symfony\Config\FrameworkConfig;

return static function (FrameworkConfig $framework) {
    $framework->router()->defaultUri('https://example.org/my/path/');
    $framework->secret('%env(APP_SECRET)%');
    $framework->httpMethodOverride(false);

    $framework->session()->handlerId(null);
    $framework->session()->cookieSecure('auto');
    $framework->session()->cookieSamesite('lax');

    $framework->phpErrors(['log' => true]);
};
