<?php
require_once dirname(__DIR__, 2) . '/model/search.php';

function index() {
    render('search.php', ['head_title' => 'Recherche']);
}

function results($keywords){
    $str = $_POST['search'];
    $results = SearchByKeyWord($str);
    render('search.php', [
    'head_title' => 'Resultats', 
    'results' => $results
]);



if (isset($_GET['keywords']) && !empty(trim($_GET['keywords']))) {
    $keywords = trim($_GET['keywords']);
        $results = SearchByKeyWord($keywords);
    }

    render('search.php', [
        'head_title' => 'Résultats',
        'results' => $results
    ]);
    
}
    