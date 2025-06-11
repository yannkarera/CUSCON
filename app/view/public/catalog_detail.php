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
        <div class="actions">
        <i class="fa-solid fa-plus" onclick="addToCart('<?= ($item['slug']) ?>', <?= ($item['price']) ?>)"></i>
        <i class="fa-solid fa-heart" onclick="addToFavorites('<?= ($item['slug']) ?>')" type="submit"></i>
        </div>
    </article>
    </div>
</section>