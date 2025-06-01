<section class="Search">
<form method="get" action="/search/results">
    <input type="text" name="keywords" value="<?= htmlspecialchars($_GET['keywords'] ?? '') ?>" placeholder="Entrez un mot-clé">
    <input type="submit" value="Search"> 
</form>

<?php if (!empty($results)): ?>
 
    <h1>Résultats :</h1>
    <ul>
        <?php foreach ($results as $item): ?>
            <li><a href="/catalog/detail/<?=htmlspecialchars($item['slug']) ?>"><?= htmlspecialchars($item['description']) ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php  elseif (isset($_GET['keywords'])): ?>
    <p>Aucun résultat trouvé.</p>
<?php endif;  ?>
</section>