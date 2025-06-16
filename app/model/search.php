<?php
require_once '../config/connection.php';

function SearchByKeyWord(string $keywords) {
    $pdo = getConnection();

    $keywords = trim($keywords);
    if ($keywords === '') {
        return [];
    }

    // Split en mots
    $words = preg_split('/\s+/', $keywords);

    // Construire la requête dynamique
    $sql = "SELECT * FROM items WHERE ";
    $conditions = [];
    $params = [];

    foreach ($words as $index => $word) {
        $param = ":kw$index";
        // Rechercher dans description et name (ajuste si besoin)
        $conditions[] = "(description LIKE $param OR name LIKE $param)";
        $params[$param] = '%' . $word . '%';
    }

    $sql .= implode(' AND ', $conditions);
    $sql .= " ORDER BY name ASC LIMIT 50";

    $sth = $pdo->prepare($sql);
    foreach ($params as $param => $value) {
        $sth->bindValue($param, $value, PDO::PARAM_STR);
    }

    $sth->execute();
    return $sth->fetchAll();
}

function logSearch($keywords, $ip){
    $pdo = getConnection();
    $stmt = $pdo->prepare("INSERT INTO search (keyword, ip_address) VALUES (?, ?)");
    $stmt->execute([$keywords, $ip]);
}
