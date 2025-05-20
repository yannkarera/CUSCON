<?php


    function index(){
        
        render('login.php', ['head_title' => 'Log in']);
    }

  
 function register(){

    render('register.php', ['head_title' => 'Register']);
 }