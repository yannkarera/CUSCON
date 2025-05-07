<?php


    function index() {
    
        render('contact/form.php', ['head_title' => 'Contact']);
    }

    function send()
    {
        $processingWentFine = true;
        if($processingWentFine){

            render('contact/success.php');
        }else{
            $data = [];
            $data['error'] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
            $data['post_data'] = $_POST;
            render('contact/form.php' , $data);
        }
         

}
