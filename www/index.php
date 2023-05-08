<?php

spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/../src/' . $className . '.php';
});

// var_dump($_GET['route']);
$route = $_GET['route'] ?? '';
// $routes= __DIR__.'

$routes = require __DIR__ . '/../src/routes.php';

$isRouteFound = false;
// echo "<pre>";
// var_dump($routes);
foreach ($routes as $pattern => $controllerAnAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo "Страница не найдена";
    return;
}
unset($matches[0]);
// var_dump($matches);

// var_dump($controllerAnAction);
$controller = new $controllerAnAction[0];
$actionName = $controllerAnAction[1];
// var_dump($controller);
// var_dump($actionName);

$controller->$actionName(...$matches);
