<?php
require_once dirname(__DIR__, 2) . '/model/item.php';

class CatalogController {
    public function index() {
        $items = Item::getAll();
        require __DIR__ . '/../../view/public/catalog.php';
        $content_view = $base_view . 'catalog.php';

        include $base_view . 'skeleton.php';
        
    }
    
}
