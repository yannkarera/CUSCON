<?php
require_once '../config/connection.php';

function findUserByEmail($email){
    $pdo = getConnection();

    $sql = "SELECT * FROM operator WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}