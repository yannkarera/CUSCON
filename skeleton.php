<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="X75B.css">
    <link rel="stylesheet" href="cuscon.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Erica+One&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $menu = [
                    'home' => 'Home',
                    'catalog#1' => 'CONTROLLERS',
                    'catalog#2' => 'OTHERS',
                    'catalog#3' => 'PS/PC',
                    'catalog#4' => 'XBOX',
                    'catalog#5' => 'NINTENDO',
                    'search' => 'S',
                    'login' => 'LOG IN'
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
            
           
            
        </div>
       
       
       <div>
           
        

       </div>         
       <div>
        <ul>
            
        </ul>
           
        <!--partenaire/liens/CGV-->
    
       </div>         
        <div>
            
       
        &copy; <?php echo date('Y'); ?>
    
    

     </div>         

    </footer>
</body>

</html>