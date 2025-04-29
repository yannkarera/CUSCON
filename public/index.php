<?php

define('SITE_ROOT', __DIR__ . '/../');
require_once( __DIR__ . '/../config/config.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$uri_parts = explode('/', $uri);

if ($uri_parts[0] === 'CUSCON') {
    array_shift($uri_parts);
}

$controller = !empty($uri_parts[0]) ? ucfirst($uri_parts[0]) . 'Controller' : 'HomeController';
$action = $uri_parts[1] ?? 'index';
$id = null;

if(isset( $uri_parts[2])){
    $id =  $uri_parts[2];
}

$controller_path = SITE_ROOT . 'app/controller/public/' . $controller . '.php';

if (file_exists($controller_path)) {
    require_once $controller_path;

        if (function_exists($action)) {
            call_user_func($action, $id);
        } else {
            http_response_code(404);
            exit("404 - Méthode '$action' non trouvée dans le contrôleur '$controller'.");
        }
} else {
    http_response_code(404);
    exit("404 - Contrôleur '$controller' non trouvé.");
}

function render($partial, $data = [])
{
    $skeleton = SITE_ROOT . 'app/view/public/skeleton.html';
    $partial = SITE_ROOT . 'app/view/public/' . $partial;

    $page = file_get_contents($skeleton);

    ob_start();
    include($partial);
    $partial = ob_get_clean();
    
    if(!empty($data['head_title'])){
        $page = str_replace('%%HEAD_TITLE%%', $data['head_title'], $page);
    }
    $page = str_replace('%%MAIN_CONTENT%%', $partial, $page);
    echo $page;
}
