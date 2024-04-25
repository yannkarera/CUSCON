<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="X75B.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $menu = [
                    'home' => 'Accueil',
                    'contact' => 'Contact',
                    'catalog' => 'Catalogue',
                    'register' => 'Inscription',
                    'login' => 'Connexion',
                    'logout' => 'Déconnexion',
                    'profile' => 'Profil',
                    'product' => 'Item'
                ];

                foreach($menu as $href => $label){
                    // echo '<li><a href="index.php?page=' . $href . '">' . $label . '</a></li>';
                    printf('<li><a href="index.php?page=%s">%s</a></li>', $href, $label);
                    
                }
                
                ?>
               
            </ul>
        </nav>
    </header>

    <main>

        <?php
        if (file_exists($page))
            include $page;
        else
            include 'pages/home.html';
        ?>
    </main>
    <footer>
        <div>
            
            <address>
                X75B <br>   
                023867058 <br>
                x75b@gmail.com_create_guid
                
            </address>
                
            <nav>
            <a href="#">facebook</a>
            <a href="#">insta</a>
            <a href="#">X</a>   
            </nav>    
            
        </div>
       
       
       <div>
           
        <img src="img/map.png" alt="carte local de l'efp">

       </div>         
       <div>
        <ul>
            <li><a href="#">Lien 1</a></li>
            <li><a href="#">Lien 2</a></li>
            <li><a href="#">Lien 3</a></li>
            <li><a href="#">Lien 4</a></li>
        </ul>
           
        <!--partenaire/liens/CGV-->
    
       </div>         
        <div>
            
       
        &copy; <?php echo date('Y'); ?>
    
    

     </div>         

    </footer>
</body>

</html>