
    



<?php

require_once 'connection.php';

?>

<h1>CONTROLLERS</h1>

<section class="container5">
<?php
try {
    $sql = "SELECT name, price FROM items";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    // Vérifie s'il y a des résultats
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '
            <div class="item">
                <article class="catalog">
                    <img src="img/manette.jpg" alt="manette, controller" />
                    <p class="text">' . $row['name'] . '</p>
                </article>
                <footer class="item_footer">
                    <button class="controllers">Add</button>
                    <span class="price">' . $row['price'] . '</span>
                    <button class="controllers">Review</button>
                </footer>
            </div>';
        }
    } else {
        echo "<p>Aucun produit trouvé.</p>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>
</section>
