<?php

require_once '../config/connection.php';

function getAllItems(){
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM items ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insert($option_id, $category_id, $theme_id, $is_accessory, $name, $slug, $price, $description, $stock){
    $pdo = getConnection();
    $sql = "INSERT INTO items (
            option_id, category_id, theme_id, is_accessory,
            name, slug, price, description, stock
        ) VALUES (
            :option_id, :category_id, :theme_id, :is_accessory,
            :name, :slug, :price, :description, :stock
        ) ";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
    ':option_id'    => $option_id,
    ':category_id'  => $category_id,
    ':theme_id'     => $theme_id,
    ':is_accessory' => $is_accessory,
    ':name'         => $name,
    ':slug'         => $slug,
    ':price'        => $price,
    ':description'  => $description,
    ':stock'        => $stock,
    ]);
}

function getItemById($id)
{
    $stmt = getConnection()->prepare("SELECT * FROM items WHERE item_id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateItem($id, $option_id, $category_id, $theme_id, $is_accessory, $name, $slug, $price, $description, $stock)
{
    $stmt = getConnection()->prepare("
        UPDATE items SET
            option_id = ?, category_id = ?, theme_id = ?, is_accessory = ?,
            name = ?, slug = ?, price = ?, description = ?, stock = ?
        WHERE item_id = ?
    ");
    return $stmt->execute([$option_id, $category_id, $theme_id, $is_accessory, $name, $slug, $price, $description, $stock, $id]);
}
