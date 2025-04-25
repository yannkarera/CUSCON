<?php
require_once '../config/connection.php';

class Item {
    public static function getAll() {
        try {
            $pdo = getConnection();
            $sql = "SELECT item_id, name, price FROM items ORDER BY item_id DESC";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }
    
  
}














