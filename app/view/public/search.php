<form id="search-form" action="/search/results" method="GET">
    <input type="text" id="searchInput" name="keywords" placeholder="keyword" autocomplete="off">
    <input type="submit" id="search-btn" value="Search">
</form>

<!-- Résultats classiques rendus par PHP -->
<?php if (!empty($search_done)): ?>
    <?php if (!empty($results)): ?>
        <ul>
            <?php foreach ($results as $item): ?>
                <li><a href="/catalog/detail/<?= urlencode($item['slug']) ?>">
                    <?= htmlspecialchars($item['description']) ?>
                </a></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun résultat trouvé.</p>
    <?php endif; ?>
<?php endif; ?>


<!-- Résultats en AJAX -->
<div id="ajax-results"></div>

