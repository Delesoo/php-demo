<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// var_dump($uri); // Debugging statement

$routes = [
    '/php-demo/demo/index' => 'controllers/index.php',
    '/php-demo/demo/about' => 'controllers/about.php',
    '/php-demo/demo/contact' => 'controllers/contact.php',
];


function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {

    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
