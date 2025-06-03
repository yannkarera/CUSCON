<?php
$item = $data['item'];
$max = $item['stock'];

?>





<section class="item-container">
    <div class="item-image">
        <img src="/assets/img/manette.jpg" alt="produit">
    </div>
    <article class="item-details" data-item-id="<?= $item['item_id']; ?>">
        <h1><?= ($item['name']) ?></h1>
        <p class="price"><?= ($item['price']) ?> €</p>
        <p class="description"><?= ($item['description']) ?></p>
       
        <form action="/favoris/ajouter/<?= ($item['slug']) ?>" method="post">
            </form>
            
            <button  onclick="addToCart('<?= ($item['slug']) ?>', <?= ($item['price']) ?>)" class="add-to-cart">Ajouter au panier</button>
            <button onclick="addToFavorites('<?= ($item['slug']) ?>')" class="add-to-favs" type="submit">Ajouter au favoris</button>

</article>

   




    </div>
</section>