<?php

require_once dirname(__DIR__, 2) . '/model/item-admin.php';

function index(){
    $items = getAllItems();
    render('item-admin.php', [
        'head_title' => 'Products',
        'items' => $items
    ], 'admin');
}