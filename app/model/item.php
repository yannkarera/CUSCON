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

    function getFilteredByOption($option_id){
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM items WHERE option_id = :option_id");
        $stmt->execute(['option_id' => $option_id]);
        return $stmt->fetchAll();

    }

    function getItemBySlug(string $slug){
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM items WHERE slug=:identifiant");
        $stmt->execute(['identifiant' => $slug]);
        return $stmt->fetch();
    }
?>
