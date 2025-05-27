<?php
require_once dirname(__DIR__, 2) . '/model/register.php';


    function index(){
        
        render('login.php', ['head_title' => 'Log in']);
    }

  
 function register(){

    render('register.php', ['head_title' => 'Register']);
 }

 function save(){
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

              if (insert($firstname, $name, $email, $pass)) {
                    render('contact/success.php', ['head_title' => 'MERCI!']);
                }else{
                    $data = [];
                    $data['error'] = 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.';
                    $data['post_data'] = $_POST;
                    render('contact/form.php' , $data);
                }
                 
}