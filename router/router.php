<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    '/'          => '/../app/controllers/home.php',
    '/services'  => '/../app/controllers/services.php',
    '/about'     => '/../app/controllers/about.php',
    '/contact'   => '/../app/controllers/contact.php',
    '/signin'   => '/../app/controllers/signin.php',
    '/signup'   => '/../app/controllers/signup.php',
    '/profile'   => '/../app/controllers/profile.php'
];

if (array_key_exists($uri, $routes)) {
    require  __DIR__ . $routes[$uri];
} else {
    http_response_code(404);
    require  __DIR__ . '/../app/controllers/404.php';
    exit;
}