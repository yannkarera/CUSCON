<?php

$uri = trim($_SERVER['REQUEST_URI'], '/');
$uri_parts = explode('/', $uri);

if ($uri_parts[0] === 'CUSCON') {
    array_shift($uri_parts);
}

$controller = !empty($uri_parts[0]) ? ucfirst($uri_parts[0]) . 'Controller' : 'HomeController';
$action = $uri_parts[1] ?? 'index';

$controller_path = __DIR__ . '/../app/controller/public/' . $controller . '.php';

if (file_exists($controller_path)) {
    require_once $controller_path;

    if (class_exists($controller)) {
        $controller_instance = new $controller();

        if (method_exists($controller_instance, $action)) {
            $controller_instance->$action(); // ⬅️ Le contrôleur appelle skeleton.php
        } else {
            http_response_code(404);
            exit("404 - Méthode '$action' non trouvée dans le contrôleur '$controller'.");
        }
    } else {
        http_response_code(404);
        exit("404 - Classe '$controller' non définie.");
    }
} else {
    http_response_code(404);
    exit("404 - Contrôleur '$controller' non trouvé.");
}
