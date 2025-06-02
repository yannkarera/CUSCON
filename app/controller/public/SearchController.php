<?php 
require_once dirname(__DIR__, 2) . '/model/search.php';
function index(){

    

    render('search.php',['head_title' => 'Search']);
}

function results($results){
    $str = $_POST['search'];
    $results = SearchByKeyWord($str);
    render('search.php', [
    'head_title' => 'Resultats', 
    'results' => $results
]);
}



