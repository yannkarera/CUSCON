<?php
require_once '../config/connection.php';

function getTagsByType(string $type) {
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT tag_id, name FROM tag WHERE type = :type");
    $stmt->execute(['type' => $type]);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $ret = [];
    foreach($res as $tag){
        $ret[$tag['name']] = $tag['tag_id'];
    }

    return $ret;
}