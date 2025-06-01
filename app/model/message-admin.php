<?php
require_once '../config/connection.php';

function getAllMessages() {
    $pdo = getconnection(); // ou ton système habituel de connexion PDO
    $stmt = $pdo->query("SELECT * FROM message ORDER BY sent_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
