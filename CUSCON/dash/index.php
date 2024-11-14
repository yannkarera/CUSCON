<?php
require_once '../connection.php';

// determiner la page a afficher
$type = 'categorie';
$page = 'listing';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['categorie'])) {
    $type = $_GET['categorie'];
} 

// afficher la page
require_once 'backend.php';

