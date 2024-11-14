
<a href="index.php?page=alter">New</a>

<ul>
<?php


$stmt = $pdo->query('SELECT * FROM categorie');
while ($row = $stmt->fetchAll()) {
    printf('<li><a href="index.php?page=alter&id=%d">%s</a></li>', $row['category_id'], $row['name']);
}
?>
</ul>