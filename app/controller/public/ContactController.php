<?php

class ContactController
{
    public function index()
    {
        require_once __DIR__ . '/../../../config/config.php';

        $base_view = __DIR__ . '/../../view/public/';
        $content_view = $base_view . 'contact.php';

        include $base_view . 'skeleton.php';
    }

    // Tu peux même ajouter une méthode pour traiter le formulaire
    public function submit()
    {
        // Exemple : $_POST['email'], $_POST['message']
        // Valider les données, envoyer un mail, enregistrer...

        echo "Message envoyé !";
    }
}
