<?php

$record = [];
$title = 'Create a theme';

if (isset($_GET['product_id'])) {
    $sql = 'SELECT product_id, name FROM produits WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['product_id']]);
    $record = $stmt->fetch();
    $title = 'Edit produits';
}

?>
<h1><?= $title ?></h1>
<form action="produits/save.php" method="POST">
    <input type="hidden" name="id" value="<?= $record['product_id'] ?>">
    <label for="label">Label</label>
    <input type="text" name="label" value="<?= $record['name']; ?>">
    <button>Save</button>
</form>