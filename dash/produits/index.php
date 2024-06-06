<?php
require_once '../connection.php';

// determiner la page a afficher
$type = 'produits';
$page = 'listing';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['produits'])) {
    $type = $_GET['produits'];
} 

// afficher la page
require_once 'backend.php';