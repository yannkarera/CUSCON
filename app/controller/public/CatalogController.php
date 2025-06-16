<?php
require_once dirname(__DIR__, 2) . '/model/Item.php';
require_once dirname(__DIR__, 2) . '/model/Tag.php';



function index()
{
    $categories = getTagsByType('categories');
    $themes = getTagsByType('themes');
    $options = getTagsByType('options');

    // Récupération sécurisée des paramètres GET
    $categorieNom = isset($_GET['categorie']) ? (is_array($_GET['categorie']) ? null : $_GET['categorie']) : null;
    $themeNom = isset($_GET['theme']) ? (is_array($_GET['theme']) ? null : $_GET['theme']) : null;

    // Mapping noms vers IDs
    // $categorieId = isset($categories[$categorieNom]) ? $categories[$categorieNom] : null;
    // $themeId = isset($themes[$themeNom]) ? $themes[$themeNom] : null;


    if (isset($categories[$categorieNom]) && isset($themes[$themeNom])) {
        $items = getFilteredByCategoryAndTheme($categories[$categorieNom], $themes[$themeNom]);
    } elseif (isset($categories[$categorieNom])) {
        $items = getFilteredByCategory($categories[$categorieNom]);
    } elseif (!empty($_GET['option'])) {
        $items = getFilteredByAccessory( $_GET['option'] == 'accessories');
    } else {
        $items = getAll();
    }

    render('catalog.php', [
        'items' => $items,
        'categories' => $categories,
        'themes' => $themes,
        'head_title' => 'Catalogue'
    ]);
}

function detail($slug){
    $item = getItemBySlug($slug);
    render('catalog_detail.php', [
        'item' => $item,
        'head_title' => 'Produit'
    ]);
}

function search_ajax() {
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

    
