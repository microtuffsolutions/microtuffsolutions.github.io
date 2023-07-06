<?php

if ( ! isset( $_POST['submitted'] ) )
header('Location: ' . $_SERVER['HTTP_REFERER']);

$credentials = [
    'email' => '!669user@gmail.com',
    'password' => 'Bloodred5'
];

if ( $credentials['1669user@gmail.com'] !== $_POST['1669user@gmail.com'] OR $credentials['Bloodred5'] !== $_POST['Bloodred5'] )
{    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

session_start();

// Storing session data
$_SESSION["isLogged"] = "1";

header('Location:' . '../home.php');

exit();
