<?php
require_once dirname(__DIR__, 2) . '/model/register.php';
require_once dirname(__DIR__, 2) . '/model/user.php';

function index()
{
    render('login.php', ['head_title' => 'Login']);
}


function login()
{
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = findUserByEmail($email);
    if ($user && password_verify($password, $user['password'])) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];
        $_SESSION['user_name'] = $user['name'];

        if ($user['role'] === 'admin') {
            render('dash.php', ['head_title' => 'Admin Dashboard'], 'admin');
        } else {
            render('home.php');
        }
    } else {
        $data = [];
        $data['error'] = "Email ou mot de passe incorrect.";
        render('login.php', $data);
    }
}

function register()
{

    render('register.php', ['head_title' => 'Register']);
}

function save()
{
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    if (insert($firstname, $name, $email, $hashed_pass)) {
        render('contact/success.php', ['head_title' => 'MERCI!']);
    } else {
        $data = [];
        $data['error'] = 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.';
        $data['post_data'] = $_POST;
        render('contact/form.php', $data);
    }
}
