<?php
require_once '../config/connection.php';

class Item {
    public static function getAll() {
        try {
            $pdo = getConnection();
            $sql = "SELECT name, price FROM items";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }
}
