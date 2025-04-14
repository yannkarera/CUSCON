










<?php /*

$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.html');
} elseif (isset($_GET['action'])) {
    die('SINGLE ACTION NO PAGE');
} else {
    $page = 'home';
}

include 'skeleton.php';

?> */
$allowed_pages = ['home', 'contact', 'catalog']; // liste blanche

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
?>