<?php

$conn = new mysqli('localhost', 'root', '', 'cuscon');

if ($conn->connect_error) {
  die ("Connexion échouée : " . $conn->connect_error);
}
?>



<h1>CONTROLLERS</h1>

<section class="container5">
    <?php

    $sql = 'SELECT name, prix FROM produit';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){

        echo '
        <div class="item">
    <article class="catalog">
      <img src="public/img/manette.jpg" alt="manette, controller" />
      <p class="text">' . $row['name'] . '</p
      </article>
      <footer>
      <button class="controllers">Add</button>
      <span class="price">' . $row['prix'] . '</span>
      <button class="controllers">Review</button>
      </footer>
      </div>';
    }
  } else {
    echo "<p> Aucun produit trouvé.</p>";
  }
    
     
 $conn->close();
 ?>       

        
    
    
 

