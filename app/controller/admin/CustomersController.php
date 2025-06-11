<?php

require_once dirname(__DIR__, 2) . '/model/customers.php';

function index(){
    $customers = getAllUsers();
    render('customers.php', [
        'head_title' => 'Customers',
        'customers' => $customers
    ], 'admin');

}