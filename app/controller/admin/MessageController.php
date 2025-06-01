<?php 

require_once dirname(__DIR__, 2) . '/model/message-admin.php';

function index() {
    $messages = getAllMessages();
    render('message-admin.php', [
        'head_title' => 'Messages reçus',
        'messages' => $messages
    ], 'admin');
}