<?php
$item = $data['item'];
$max = $item['stock'];

?>

  <div class="cart">
    <h2>Mon Panier</h2>
    <div id="cartItems"></div>
    <p><strong>Total:</strong> <span id="totalPrice">0€</span></p>
  </div>

<div id="favorite-products">
    <h2>Mes Favoris</h2>
    <ul id="favoritesList"></ul>
</div>




<section class="item-container">
    <div class="item-image">
        <img src="/assets/img/manette.jpg" alt="produit">
    </div>
    <div class="item-details">
        <h1><?= ($item['name']) ?></h1>
        <p class="price"><?= ($item['price']) ?> €</p>
        <p class="description"><?= ($item['description']) ?></p>
       
        <form action="/favoris/ajouter/<?= ($item['slug']) ?>" method="post">
            </form>
            
            <button  onclick="addToCart('<?= ($item['slug']) ?>', <?= ($item['price']) ?>)" class="add-to-cart">Ajouter au panier</button>
            <button onclick="addToFavorites('<?= ($item['slug']) ?>')" class="add-to-favs" type="submit">Ajouter au favoris</button>

    </div>

   




    </div>
</section>