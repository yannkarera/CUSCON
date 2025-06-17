<?php
// Vérifie que $tags est bien défini
if (!isset($tags) && isset($data['tags'])) {
    $tags = $data['tags'];
}
?>

<section class="items-listing">


<h1>Tags</h1>


<?php if (!empty($tags)): ?>
    
    <ul>
            <?php foreach ($tags as $tag): ?>
                              <li>
                                Name: <?= htmlspecialchars($tag['name']) ?><br>
                                type: <?= htmlspecialchars($tag['type']) ?>
                              </li>
                              <a href="/admin/tags/edit/<?= $tag['tag_id'] ?>">Modifier</a>


            
             <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun tag à afficher.</p>
<?php endif; ?>
</section>