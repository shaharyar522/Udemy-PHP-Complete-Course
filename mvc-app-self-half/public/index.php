<?php
require_once __DIR__ . '/../app/init.php';
require_once __DIR__ . '/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// remove project folder from URI
$scriptDir = dirname($_SERVER['SCRIPT_NAME']); // /udemy/mvc-app/public
$basePath  = str_replace('/public', '', $scriptDir);

$request = str_replace($basePath, '', $uri);
$request = trim($request, '/');   // ← add this line to remove slashes
$request = $request ?: '/';       // default home page


$method = $_SERVER['REQUEST_METHOD'];

if (isset($routes[$method][$request])) {

    list($controller, $action) = explode('@', $routes[$method][$request]);

    $controllerInstance = new $controller();
    $controllerInstance->$action();

} else {
    http_response_code(404);
    render('errors/404');
}
