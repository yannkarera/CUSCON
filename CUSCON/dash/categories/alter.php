<?php

$conn = new msqli('localhost', 'root', '', 'cuscon');

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$record = [];

if (isset($_GET['id'])) {
    $sql = 'SELECT name FROM categorie WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['category_id']]);
    $record = $stmt->fetch();
}

?>


<form action="categories/save.php" method="
POST">
    <input type="hidden" name="category_id" value="<?= $record['category_id'] ?>">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= $record['name']; ?>">
    <button>Save</button>
</form>