<section class="items-listing">
<h1>Products</h1>

<?php if (!empty($items)): ?>
    <ul>
            <?php foreach ($items as $item): ?>
                              <li>
                                Name: <?= htmlspecialchars($item['name']) ?><br>
                                Description: <?= htmlspecialchars($item['description']) ?><br>
                                Price: <?= htmlspecialchars($item['price']) ?> € <br>
                                Stock: <?= htmlspecialchars($item['stock']) ?><br>
                                Created_at: <?= htmlspecialchars($item['created_at']) ?>
                              </li>

            
             <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun produit à afficher.</p>
<?php endif; ?>
</section>