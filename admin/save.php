<?php
require_once '../connection.php';

// Supposons que vous récupérez ces données du formulaire avec $_POST
$items = $_POST;  // Vous pouvez aussi faire une validation/sanitation ici si nécessaire

// Vérifiez que toutes les données nécessaires sont présentes dans le tableau $_POST
// Vous pouvez ajouter une vérification ici si besoin pour éviter des erreurs si certains paramètres sont manquants

// Exécuter la requête préparée avec les paramètres nommés
$stmt = $pdo->prepare('
    INSERT INTO items (
        item_id,
        option_id,
        category_id,
        theme_id,
        name, 
        slug, 
        price, 
        description, 
        stock,
        created_at
    ) VALUES (
        :item_id, 
        :option_id, 
        :category_id, 
        :theme_id, 
        :name, 
        :slug, 
        :price, 
        :description, 
        :stock,
        :created_at
    )
');

// Exécuter la requête avec le tableau $_POST en s'assurant que les clés correspondent
$stmt->execute([
    ':item_id' => $items['item_id'],
    ':option_id' => $items['option_id'],
    ':category_id' => $items['category_id'],
    ':theme_id' => $items['theme_id'],
    ':name' => $items['name'],
    ':slug' => $items['slug'],
    ':price' => $items['price'],
    ':description' => $items['description'],
    ':stock' => $items['stock'],
    ':created_at' => $items['created_at'] // Assurez-vous que 'created_at' est correctement formaté (si nécessaire)
]);
