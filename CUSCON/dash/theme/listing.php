<a href="index.php?type=theme&page=alter">New</a>
<ul>
    <?php
    $stmt = $pdo->query('SELECT name FROM theme');
    while ($row = $stmt->fetch()) {
        printf('<li><a href="index.php?type=theme&page=alter&id=%d">%s</a></li>', $row['theme_id'], $row['name']);
    }
    ?>
</ul>