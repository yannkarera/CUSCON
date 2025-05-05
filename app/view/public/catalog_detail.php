<?php
$item = $data['item'];
$max = $item['stock'];

?>
<section class="item-container">
    <div class="item-image">
        <img src="/assets/img/manette.jpg" alt="produit">
    </div>
    <div class="item-details">
        <h1><?= ($item['name']) ?></h1>
        <p class="price"><?= ($item['price']) ?> €</p>
        <p class="description"><?= ($item['description']) ?></p>
        <button class="add-to-cart">Ajouter au panier</button>
    </div>
    <div class="quantity-selector">
        <label for="quanitity_<?= $item['stock']?>" >Quantity :</label>
        <select name="quanitiy" id="quantity_<? $item['stock']?>">
            <?php for ($i = 1; $i <= $max; $i++): ?>
                <option value="<? $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
        
        
        
        
    </div>
</section>





