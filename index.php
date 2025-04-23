










<?php 


$allowed_pages = ['home', 'contact', 'catalog', 'new', 'items']; // liste blanche

if (isset($_GET['page']) && in_array($_GET['page'], $allowed_pages)) {
    $base = 'pages/' . $_GET['page'];

    if (file_exists($base . '.php')) {
        $page = realpath($base . '.php');
    } elseif (file_exists($base . '.html')) {
        $page = realpath($base . '.html');
    } else {
        die('Page not found.');
    }
} else {
    $page = realpath('pages/home.php'); // ou .html selon ta structure
}

include 'skeleton.php';
?> 




