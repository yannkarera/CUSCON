<section class="editItem">
<h1>Modifier un produit</h1>

<form action="/admin/items/update" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($item['item_id']) ?>">

    <label>Nom</label>
    <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>

    <label>Slug</label>
    <input type="text" name="slug" value="<?= htmlspecialchars($item['slug']) ?>" required>

    <label>Prix (€)</label>
    <input type="number" name="price" step="0.01" value="<?= htmlspecialchars($item['price']) ?>" required>

    <label>Description</label>
    <textarea name="description"><?= htmlspecialchars($item['description']) ?></textarea>

    <label>Stock</label>
    <input type="number" name="stock" value="<?= htmlspecialchars($item['stock']) ?>" min="0">

    <label>Accessoire</label>
    <input type="checkbox" name="is_accessory" <?= $item['is_accessory'] ? 'checked' : '' ?>>

    <label>Catégorie</label>
    <select name="category_id">
        <option value="">-- Sélectionner --</option>
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['tag_id'] ?>" <?= $item['category_id'] == $cat['tag_id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($cat['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Option</label>
    <select name="option_id">
        <option value="">-- Sélectionner --</option>
        <?php foreach ($options as $opt): ?>
            <option value="<?= $opt['tag_id'] ?>" <?= $item['option_id'] == $opt['tag_id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($opt['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Thème</label>
    <select name="theme_id">
        <option value="">-- Sélectionner --</option>
        <?php foreach ($themes as $th): ?>
            <option value="<?= $th['tag_id'] ?>" <?= $item['theme_id'] == $th['tag_id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($th['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>
    <button type="submit">Enregistrer</button>
    <a href="/admin/items">Annuler</a>
</form>
</section>