<a href="index.php?type=theme&page=alter">New</a>
<ul>
    <?php
    $stmt = $pdo->query('SELECT product_id, name FROM produits');
    while ($row = $stmt->fetch()) {
        printf('<li><a href="index.php?type=theme&page=alter&id=%d">%s</a></li>', $row['product_id'], $row['name']);
    }
    ?>
</ul>