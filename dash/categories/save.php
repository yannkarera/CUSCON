<?php
require_once '../connection.php';

// is an update ?
if(empty($_POST['id'])){
    $sql = 'INSERT INTO category (name) VALUES (:name)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $_POST['name']]);
}
else{
    $sql = 'UPDATE category SET name = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['name'], $_POST['id']]);
}

header('Location: index.php?page=listing');