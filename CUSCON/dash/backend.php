<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>

<body>

    <header>
        <nav>
            <a href="index.php?type=categorie">Category</a>
            <a href="index.php?type=theme">Theme</a>
            <a href="index.php?type=tag">Tag</a>
            <a href="index.php?type=produit">Item</a>
        </nav>
    </header>
    <main>
        <?php
        $path = $type . '/' . $page . '.php';
        if (file_exists($path)) {
            require $path;
        }; ?>
    </main>
</body>

</html>