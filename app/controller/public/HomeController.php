<?php

class HomeController
{
    public function index()
    {
        define('BASE_URL', '/CUSCON/');

        // ✅ Pas de dossier 'pages'
        $base_view = __DIR__ . '/../../view/public/';

        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'contact':
                $content_view = $base_view . 'contact.php';
                break;
            case 'catalog':
                $content_view = $base_view . 'catalog.php';
                break;
            default:
                $content_view = $base_view . 'home.php';
        }

        include $base_view . 'skeleton.php';
    }
}
