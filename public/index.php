<?php
if (PHP_SAPI == 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
$dependencies = require __DIR__ . '/../src/dependencies.php';
$dependencies($app);


// //Register routes
// $routes = scandir(__DIR__ . '/../src/App/Routes/');
// foreach ($routes as $route) {
//     if (strpos($route, '.php')) {
//         $_route_ = require __DIR__ . '/../src/App/Routes/' . $route;
//         $_route_($App);
//     }
// }

$routesDeputados = require __DIR__ . '/../src/App/Routes/Index.php';
$routesDeputados($app);

// $routesVerbas = require __DIR__ . '/../src/App/Routes/Verbas.php';
// $routesVerbas($app);

// $routesSwagger = require __DIR__ . '/../src/App/Routes/Swagger.php';
// $routesSwagger($app);


$app->run();
