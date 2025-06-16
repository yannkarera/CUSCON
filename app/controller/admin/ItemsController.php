<?php

require_once dirname(__DIR__, 2) . '/model/item-admin.php';

function index()
{
    $items = getAllItems();
    render('item-admin.php', [
        'head_title' => 'Products',
        'items' => $items
    ], 'admin');
}

function add()
{
    $stmt = getConnection()->prepare('SELECT tag_id, name FROM tag WHERE type=?');

    $stmt->execute(['categories']);
    $categories = $stmt->fetchAll();

    $stmt->execute(['options']);
    $options = $stmt->fetchAll();

    $stmt->execute(['themes']);
    $themes = $stmt->fetchAll();

    render('addItems.php', compact('categories', 'options', 'themes'), 'admin');
}

function save(){

$option_id    = $_POST['option_id'] ?? null;
$category_id  = $_POST['category_id'] ?? null;
$theme_id     = $_POST['theme_id'] ?? null;
$is_accessory = isset($_POST['is_accessory']) ? 1 : 0;
$name         = trim($_POST['name'] ?? '');
$slug         = trim($_POST['slug'] ?? '');
$price        = $_POST['price'] ?? null;
$description  = trim($_POST['description'] ?? '');
$stock        = $_POST['stock'] ?? 0;

if (insert($option_id, $category_id, $theme_id, $is_accessory, $name, $slug, $price, $description, $stock)) {
    render('success.php', ['head_title' => 'MERCI!'], 'admin');
} else {
        $data = [];
        $data['error'] = 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.';
        $data['post_data'] = $_POST;
        render('addItems.php', $data, 'admin');


}

}

function edit($id)
{
    if (!$id) {
        http_response_code(400);
        exit("ID du produit manquant.");
    }

    $item = getItemById($id);

    if (!$item) {
        http_response_code(404);
        exit("Produit introuvable.");
    }

    // Charger aussi les tags nécessaires
    $stmt = getConnection()->prepare('SELECT tag_id, name FROM tag WHERE type=?');

    $stmt->execute(['categories']);
    $categories = $stmt->fetchAll();

    $stmt->execute(['options']);
    $options = $stmt->fetchAll();

    $stmt->execute(['themes']);
    $themes = $stmt->fetchAll();

    render('editItem.php', compact('item', 'categories', 'options', 'themes'), 'admin');
}

function update()
{
    $id = $_POST['id'] ?? null;
   

    $option_id    = $_POST['option_id'] ?? null;
    $category_id  = $_POST['category_id'] ?? null;
    $theme_id     = $_POST['theme_id'] ?? null;
    $is_accessory = isset($_POST['is_accessory']) ? 1 : 0;
    $name         = trim($_POST['name'] ?? '');
    $slug         = trim($_POST['slug'] ?? '');
    $price        = $_POST['price'] ?? null;
    $description  = trim($_POST['description'] ?? '');
    $stock        = $_POST['stock'] ?? 0;

    if (updateItem($id, $option_id, $category_id, $theme_id, $is_accessory, $name, $slug, $price, $description, $stock)) {
        header("Location: /admin/items/update");
        exit;
    } else {
        echo "Erreur lors de la mise à jour du produit.";
    }

    render('success.php');
}


