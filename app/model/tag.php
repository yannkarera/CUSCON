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

function GetAllTags(){
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM tag");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insert($name, $type){
    $pdo = getConnection();
    $sql = "INSERT INTO tag (name, type) VALUES (:name, :type)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':name' => $name,
        ':type' => $type
    ]);
}

function updateTag($name, $type){
    $stmt = getConnection()->prepare("
        UPDATE tag SET
            name = ?, type = ?
        WHERE tag_id = ?
    ");
    return $stmt->execute([$name, $type]);
}