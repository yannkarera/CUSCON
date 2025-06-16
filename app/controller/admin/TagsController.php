<?php

require_once dirname(__DIR__, 2) . '/model/tag.php';

function index()
{
    $tags = getAllTags();
    render('tags.php', [
        'head_title' => 'Tags',
        'tag' => $tags
    ], 'admin');
}

function add()
{
    render('addTags.php', ['head_title' => 'Add Tag'], 'admin');
}

function save(){

$name    = $_POST['name'] ?? null;
$type  = $_POST['type'] ?? null;


if (insert($name, $type)) {
    render('success.php', ['head_title' => 'MERCI!'], 'admin');
} else {
        $data = [];
        $data['error'] = 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.';
        $data['post_data'] = $_POST;
        render('addItems.php', $data, 'admin');


}

}



