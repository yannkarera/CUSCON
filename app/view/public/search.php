<form action="/search/results" method="POST">
<input type="text" name="search" placeholder="key word">
<input type="submit" id="search-btn" value="Search">
</form>

<?php if(!empty($results)) : ?>
    <ul>
        <?php foreach ($results as $item): ?>
            <li><a href="/catalog/detail/<?= urlencode($item['slug']) ?>"><?= htmlspecialchars($item['description']) ?> </a></li>
    </ul>
<?php endforeach; ?>
        <?php else: ?>
    <p>Aucun résultat trouvé.</p>
<?php endif; ?>