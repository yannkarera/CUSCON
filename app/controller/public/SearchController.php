<?php 
require_once dirname(__DIR__, 2) . '/model/search.php';
function index(){

    

    render('search.php',['head_title' => 'Search']);
}


