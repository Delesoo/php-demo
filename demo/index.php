<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
var_dump($uri); // Debugging statement

$routes = [
    '/php-demo/demo/index.php' => 'controllers/index.php',
    '/php-demo/demo/about.php' => 'controllers/about.php',
    '/php-demo/demo/contact.php' => 'controllers/contact.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    echo "Route not found"; // Debugging statement
}