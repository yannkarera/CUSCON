<?php
require_once '../config/connection.php';

function insert($firstname, $lastname, $email, $message) {
    $pdo = getConnection();
    $sql = "INSERT INTO message (firstname, lastname, email, message) 
            VALUES (:firstname, :lastname, :email, :message)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':message' => $message
    ]);
}
