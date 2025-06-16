<?php
require_once dirname(__DIR__, 2) . '/model/search.php';

// Affiche le formulaire de recherche vide
function index() {
    render('search.php', [
        'head_title' => 'Recherche',
        'results' => []
    ]);
}

// Reçoit les résultats en GET ou POST
function results($keywords = null) {
    $keywords = trim($_GET['keywords'] ?? $keywords ?? '');

    $search_done = false;
    $results = [];

    if (!empty($keywords)) {

        // Journalisation
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        logSearch($keywords, $ip);
        
        // Recherche réelle
        $search_done = true;
        $results = SearchByKeyWord($keywords);
    } else {
        $results = [];
    }

    render('search.php', [
        'head_title' => 'Résultats',
        'results' => $results,
        'search_done' => $search_done,
        'keywords' => $keywords
    ]);

}

function ajax() {
    header('Content-Type: application/json');
    $keywords = trim($_GET['keywords'] ?? '');
    
    if (!empty($keywords)) {
        $results = SearchByKeyWord($keywords);
    } else {
        $results = [];
    }

    // Ne retourne que les champs utiles
    $filtered = array_map(function($item) {
        return [
            'slug' => $item['slug'],
            'name' => $item['name'],
        ];
    }, $results);

    echo json_encode($filtered);
}


// Facultatif : support d'une recherche via POST (si tu as un <form method="POST"> quelque part)
