<?php
require_once '../../connection.php';


// is an update ?
if (empty($_POST['product_id'])) {
    $sql = 'INSERT INTO produits (name) VALUES (:name)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $_POST['name']]);
} else {
    $sql = 'UPDATE produits SET name = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['name'], $_POST['product_id']]);
}

header('Location: ../index.php?type=theme&page=listing');