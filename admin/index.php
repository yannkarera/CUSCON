<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>

<body>
    ADMIN DASH

    <form action="save.php" method="POST">
        <label for="item_id">Item_id:</label>
        <input type="text" id="item_id" name="item_id" required maxlength="100"><br>

        <label for="option_id">Option_id</label>
        <input type="number" id="option_id" name="option_id"><br>
        
        <label for="category_id">Category_id</label>
        <input type="number" id="category_id" name="category_id"><br>
        
        <label for="theme_id">Theme_id</label>
        <input type="number" id="theme_id" name="theme_id"><br>
        
        <label for="name">  Name:</label>
        <input type="text" id="name" name="name" required maxlength="100"><br>

        
        <label for="slug">Slug</label>
        <input type="text" id="slug" name="slug"><br>
        
        <label for="price">Price</label>
        <input type="text" id="price" name="price"><br>

        <label for="description">Description</label>
        <input type="text" id="description" name="description"><br>

        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock"><br>

        <label for="created_at">Created_at</label>
        <input type='datetime' id="created_at" name="created_at"><br>


        
        
        
        <input type="submit" value="Ajouter le produit">
</form>
</body>
        
</html>

       



       


      

