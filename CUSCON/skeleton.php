<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="public/X75B.css">
    <link rel="stylesheet" href="public/cuscon.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Erica+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <header>
        <nav>
            <button class="menu-toggle">☰</button>
            <ul>
                <?php
                $menu = [
                    'home' => 'HOME',
                    'catalog' => 'CONTROLLERS',
                    'others' => 'OTHERS',
                    'playstation' => 'PS/PC',
                    'xbox' => 'XBOX',
                    'nintendo' => 'NINTENDO',
                    'login' => 'LOG IN'
                ];
                
                foreach($menu as $href => $label){
                    // echo '<li><a href="index.php?page=' . $href . '">' . $label . '</a></li>';
                    printf('<li><a href="index.php?page=%s">%s</a></li>', $href, $label);
                    
                }
                
                
                ?>
                <li>
                    <a href="javascript:void(0);"
                    onclick="opensearchPopup()">
                    <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
   

                
<main>
    
    <?php


if (file_exists($pages))
include $pages;
else
include 'pages/home.php';
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