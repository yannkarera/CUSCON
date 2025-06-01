<?php

require_once '../config/connection.php';

function getAllItems(){
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM items ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}