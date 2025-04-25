<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
<?php

// var_dump('_GET', $_GET);
// var_dump('_SERVER:', $_SERVER);
$uri_parts = explode('/', $_SERVER['REQUEST_URI']);
array_shift($uri_parts);
// var_dump($uri_parts);

$controller = $uri_parts[0];
$action = $uri_parts[1];

$controller_path = __DIR__."/../app/controller/public/$controller.php";
// var_dump($controller_path);
if(file_exists($controller_path)){
    include($controller_path);
    if(function_exists($action)){
        echo "$controller has function $action";
    } else {
        http_response_code(404);
        exit("404 Function « {$action} » in Controller «{$controller}» does not exist");
    }
}
else{
    http_response_code(404);
    exit("404 controller «{$controller}» non trouvé");
}
    
?>
</pre>
</body>
</html>
