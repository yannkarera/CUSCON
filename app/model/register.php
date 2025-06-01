<?php
require_once '../config/connection.php';

function insert($firstname, $name, $email, $pass) {
    $pdo = getConnection();
    $sql = "INSERT INTO operator (firstname, name, email, password)VALUES (:firstname, :name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':firstname' => $firstname,
        ':name' => $name,
        ':email' => $email,
        ':password' => $pass
    ]);
}
