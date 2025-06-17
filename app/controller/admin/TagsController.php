<?php

require_once dirname(__DIR__, 2) . '/model/tag.php';

function index()
{
    $tags = getAllTags();
    render('tags.php', [
        'head_title' => 'Tags',
        'tags' => $tags
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

function edit($id)
{
    if (!$id || !is_numeric($id)) {
        http_response_code(400);
        exit("ID du tag manquant ou invalide.");
    }

    // Récupération du tag par ID
    $tag = getTagById((int)$id);

    if (!$tag) {
        http_response_code(404);
        exit("Tag introuvable.");
    }

    // Affichage de la vue d'édition avec le tag
    render('editTag.php', ['tag' => $tag], 'admin');
}

function update()
{
    $id = $_POST['tag_id'] ?? null;
   

    $name    = $_POST['name'] ?? null;
    $type  = $_POST['type'] ?? null;
   

    if (updateTag($name, $type, $id)) {
        render('success.php', [], 'admin');
        exit;
    } else {
        echo "Erreur lors de la mise à jour du tag.";
    }

}


