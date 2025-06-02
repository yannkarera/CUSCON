<?php
require_once '../config/connection.php';

function SearchByKeyWord($keyword){
    $pdo = getConnection();
    $sth = $pdo->prepare("SELECT * FROM items WHERE description like ?");
    $sth->execute(['%' . $keyword . '%']);
    return $sth->fetchAll();
}