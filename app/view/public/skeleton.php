<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/cuscon.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/X75B.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<header>
    <nav>
        <?php
        
        include 'navbar.html'
        ?>
               
               
    </nav>
 </header>
<body>

    <main>

        <?php include $content_view;?>
        
    </main>
    <footer>
                <p> <?php echo date('Y'); ?></p>
            
    </footer>

    <script src="<?= BASE_URL ?>assets/js/carroussel.js"></script>
    <script src="<?= BASE_URL ?>assets/js/carroussel2.js"></script>
</body>

</html>