<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="container5">
        <?php if (!empty($items)) : ?>
            <?php foreach ($items as $item) : ?>
                <div class="item">
                    <article class="catalog">
                        <img src="../assets/img/manette.jpg" alt="manette, controller">
                    </article>
                    <footer class="item_footer">
                        <p class="textY"><?= htmlspecialchars($item['name']) ?></p>
                        <button class="controllers">Add</button>
                        <span class="price"><?= htmlspecialchars($item['price']) ?> €</span>
                        <button class="controllers">Review</button>
                    </footer>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Aucun produit trouvé.</p>
        <?php endif; ?>
    </section>
    
</body>
</html>

