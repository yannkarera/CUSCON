<?php 

require_once(__DIR__ . '/../connection.php');


?>

<h1>**NEW**</h1>

<section class="container5">
<?php
try {
    $sql = "SELECT item_id, name, price FROM items ORDER BY item_id DESC";
    $stmt = $pdo->prepare($sql);
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

 $pdo = null;
?>
    
    
 
