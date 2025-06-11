<?php 
require_once '../config/connection.php';

function getAllUsers(){
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM operator WHERE role = 'user'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}