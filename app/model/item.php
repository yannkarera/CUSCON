<?php
require_once '../config/connection.php';



    function getAll() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM items");
        return $stmt->fetchAll();
    }

    function getFilteredByCategoryAndTheme($categorieId, $themeId) {
        $categorieId = intval($categorieId);
        $themeId = intval($themeId);

        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM items WHERE category_id = :categorieId AND theme_id = :themeId");
        $stmt->execute([
            ':categorieId' => $categorieId,
            ':themeId' => $themeId
        ]);
        return $stmt->fetchAll();
    }

    function getFilteredByAccessory(bool $is_accessory){
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM items WHERE is_accessory = :is_accessory");
        $stmt->execute(['is_accessory' => (int)$is_accessory]);
        return $stmt->fetchAll();

    }

    function getItemBySlug(string $slug){
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM items WHERE slug=:identifiant");
        $stmt->execute(['identifiant' => $slug]);
        return $stmt->fetch();
    }


    function getItemByDate(){
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM items ORDER BY item_id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
?>
