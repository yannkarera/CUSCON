<?php
$items = $data['items'];
?>
<section class="container5">
     <?php if (!empty($items)) : ?>
         <?php foreach ($items as $item) : ?>
             <div class="item">
                 <article class="catalog">
                     <img src="../assets/img/manette.jpg" alt="manette, controller">
                 </article>
                 <footer class="item_footer">
                     <p class="text"><?= htmlspecialchars($item['name']) ?></p>
                     <button class="controllers">Add</button>
                     <span class="price"><?= htmlspecialchars($item['price']) ?> €</span>
                     <a href="/catalog/detail/<?= htmlspecialchars($item['slug']) ?>" class="controllers">Review</a>
                 </footer>
             </div>
         <?php endforeach; ?>
     <?php else : ?>
         <p>Aucun produit trouvé.</p>
     <?php endif; ?>
 </section>

   

   
   
