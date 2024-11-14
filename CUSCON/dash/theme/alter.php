<?php

$record = [];
$title = 'Create a theme';

if (isset($_GET['theme_id'])) {
    $sql = 'SELECT theme_id, name FROM theme WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['theme_id']]);
    $record = $stmt->fetch();
    $title = 'Edit theme';
}

?>
<h1><?= $title ?></h1>
<form action="theme/save.php" method="POST">
    <input type="hidden" name="id" value="<?= $record['theme_id'] ?>">
    <label for="name">Label</label>
    <input type="text" name="name" value="<?= $record['name']; ?>">
    <button>Save</button>
</form>