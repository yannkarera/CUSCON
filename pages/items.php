<?php
// --- PARTIE 1 : Connexion et récupération des données ---

// Connexion à la BDD
require_once 'connection.php';

// Mapping des noms vers les IDs
$categories = [
  'pspc' => 32,
  'xbox' => 33,
  'nintendo' => 34
];

$themes = [
  'sports' => 29,
  'music' => 30,
  'films' => 31
];

// Paramètres GET
$categorieNom = $_GET['categorie'] ?? null;
$themeNom = $_GET['theme'] ?? null;

// Vérifie que les noms sont valides et récupère les IDs
if (isset($categories[$categorieNom]) && isset($themes[$themeNom])) {
    $categorieId = $categories[$categorieNom];
    $themeId = $themes[$themeNom];

    $sql = "SELECT * FROM items WHERE category_id = $categorieId AND theme_id = $themeId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){

        echo '
        <div class="item">
    <article class="catalog">
      <img src="img/manette.jpg" alt="manette, controller" />
      <p class="text">' . $row['name'] . '</p
      </article>
      <footer class="item_footer">
      <button class="controllers">Add</button>
      <span class="price">' . $row['price'] . '</span>
      <button class="controllers">Review</button>
      </footer>
      </div>';
    }
  } else {
    echo "<p> Aucun produit trouvé.</p>";
  }
    
}   
 $conn->close();
 ?>       











