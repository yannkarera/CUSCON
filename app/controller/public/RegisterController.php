<?php

class RegisterController
{
    public function index()
    {
        require_once __DIR__ . '/../../../config/config.php';

        $base_view = __DIR__ . '/../../view/public/';
        $content_view = $base_view . 'register.php';

        include $base_view . 'skeleton.php';
    }

  
}
