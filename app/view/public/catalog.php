<?php
$items = $data['items'];
?>


<section class="catalogue">

     <?php if (!empty($items)) : ?>
         <?php foreach ($items as $item) : ?>
             <div class="item">
                 <article class="catalog">
                 <a href="/catalog/detail/<?= htmlspecialchars($item['slug']) ?>">
                  <img src="../assets/img/manette.jpg" alt="manette, controller"> 
                </a>
                 </article>
                 <footer class="item_footer">
                 <p><?= htmlspecialchars($item['name']) ?></p>
                 <span class="price"><?= htmlspecialchars($item['price']) ?> €</span>
                 <i class="fa-solid fa-heart" onclick="addToFavorites('<?= ($item['slug']) ?>')" type="submit"></i>
                 </footer>
             </div>
         <?php endforeach; ?>
     <?php else : ?>
         <p>Aucun produit trouvé.</p>
     <?php endif; ?>
 </section>

   

   
   
