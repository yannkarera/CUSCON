<section class="addItems">
<h1>Ajouter un item</h1>
<form action="save" method="POST">


    <label for="option_id">Option :</label>
    <select id="option_id" name="option_id" required>
        <?php foreach($data['options'] as $tag) :?>
        <option value="<?= $tag['tag_id']?>"><?= $tag['name']?></option>
        <?php endforeach ?>
    </select>

    <label for="category_id">Catégorie :</label>
    <select id="category_id" name="category_id" required>
        <?php foreach($data['categories'] as $tag) :?>
        <option value="<?= $tag['tag_id']?>"><?= $tag['name']?></option>
        <?php endforeach ?>
    </select>

    <label for="theme_id">Thème :</label>
    <select id="theme_id" name="theme_id" required>
        <?php foreach($data['themes'] as $tag) :?>
        <option value="<?= $tag['tag_id']?>"><?= $tag['name']?></option>
        <?php endforeach ?>
    </select>

    <label for="is_accessory">Est un accessoire :</label>
    <select name="is_accessory" id="is_accessory">
        <option value="0">Non</option>
        <option value="1">Oui</option>
    </select>

    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" maxlength="255" required oninput="updateSlug()">

    <label for="slug">Slug :</label>
    <input type="text" id="slug" name="slug" maxlength="255" required readonly>

    <label for="price">Prix :</label>
    <input type="number" id="price" name="price" step="0.01" required>

    <label for="description">Description :</label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea>

    <label for="stock">Stock :</label>
    <input type="number" id="stock" name="stock" required>

    <button type="submit">Enregistrer</button>
</form>
</section>