<section class="addItems">
<h1>Ajouter un tag</h1>

<form action="save" method="POST">

    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" maxlength="100" required>

    <label for="type">Type :</label>
    <select name="type">
      <option value="free">Free</option>
      <option value="themes">themes</option>
      <option value="categories">categories</option>
      <option value="options">options</option>
    </select>

    <button type="submit">Enregistrer</button>
</form>
</section>
