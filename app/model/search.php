<?php
require_once '../config/connection.php';

function SearchByKeyWord(){
    $pdo = getConnection();
    $str = $_POST["submit"];
    $sth = $pdo->prepare("SELECT * FROM items WHERE name = '$str'");
    return $sth->fetchAll();
}