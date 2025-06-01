<?php
require_once '../config/connection.php';

function SearchByKeyWord($keywords){

    
    $pdo = getConnection();
    $sth = $pdo->prepare("SELECT description, slug FROM items WHERE description like :keywords ");
    $sth->execute(['keywords' => '%' . $keywords . '%']);
    return $sth->fetchAll();
    
    }