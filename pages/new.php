<?php 

require_once 'connection.php'

?>

<h1>**NEW**</h1>

<section class="container5">
    <?php

    $sql = 'SELECT item_id, name, price FROM items ORDER BY item_id DESC';
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
    
     
 $conn->close();
 ?>       

        
    
    
 

