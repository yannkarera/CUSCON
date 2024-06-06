<a href="index.php?page=alter">New</a>

<ul>
<?php


$stmt = $pdo->query('SELECT category_id, name FROM category');
while ($row = $stmt->fetchAll()) {
    printf('<li><a href="index.php?page=alter&id=%d">%s</a></li>', $row['product_id'], $row['name']);
}
?>
</ul>