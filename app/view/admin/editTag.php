

<h1>Éditer un tag</h1>

<form method="POST" action="/admin/tags/update">
    <input type="hidden" name="tag_id" value="<?= htmlspecialchars($tag['tag_id']) ?>">

    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($tag['name']) ?>" required>
    <br>

    <label for="type">Type :</label>
    <input type="text" id="type" name="type" value="<?= htmlspecialchars($tag['type']) ?>" required>
    <br>

    <button type="submit">Enregistrer les modifications</button>
</form>
