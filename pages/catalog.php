<?php 

require_once 'connection.php'

?>

<h1>CONTROLLERS</h1>

<section class="container5">
    <?php

    $sql = 'SELECT name, prix FROM product';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){

        echo '
        <div class="item">
    <article class="catalog">
      <img src="img/manette.jpg" alt="manette, controller" />
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

        
    
    
 

