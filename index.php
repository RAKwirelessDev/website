<?php

const _ROUTES_ = [
    '/' => 'index.php',
    '/about/' => 'about.php',
    '/faq/' => 'faq.php',

    '{PAGE_NOT_FOUND}' => 'error-404.php'
];

// ================================================================= //
error_reporting(0);
require_once('./src/classes/autoload.php');

$url_path = Core\Commons::url_path();
$router = new Core\Router(_ROUTES_);
$router->fetch($url_path);