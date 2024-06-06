<?php
require_once '../connection.php';

// determiner la page a afficher
$type = 'category';
$page = 'listing';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['category'])) {
    $type = $_GET['category'];
} 

// afficher la page
require_once 'backend.php';