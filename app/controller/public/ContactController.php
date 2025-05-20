<?php
require_once dirname(__DIR__, 2) . '/model/message.php';

    function index() {
    
        render('contact/form.php', ['head_title' => 'Contact']);
    }

    function save()
    {
            $firstname = $_POST['firstname'] ?? '';
            $lastname = $_POST['lastname'];
            $email = $_POST['email'] ?? '';
            $message = $_POST['message'] ?? '';
            
            if (insert($firstname, $lastname, $email, $message)) {
                    render('contact/success.php', ['head_title' => 'MERCI!']);
                }else{
                    $data = [];
                    $data['error'] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
                    $data['post_data'] = $_POST;
                    render('contact/form.php' , $data);
                }
                 
        
        }

    
      


