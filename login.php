<?php

require __DIR__ . '/usuarios.php';

/**
 * Antes de loguearse -> $_SESSION = [];
 * Despues de loguearse -> $_SESSION = ['username' => 'Paula' ];
 */

session_start();
if (empty($_SESSION['userId']) == false) {
    header('location: /php101');
}
else {
    $hasErrors = false; //flag
    if (empty($_POST['user']) == true) {
        $hasErrors = true;
        $_SESSION['userError'] = true;
    }
    if (empty($_POST['password']) == true) {
        $hasErrors = true;
        $_SESSION['passwordError'] = true;
    }

    if ($hasErrors == true) {
        header('location: /php101/loginForm.php');
        die;
    }
        
    $username = $_POST['user'];
    $password = $_POST['password'];
    
    $userId = correctlyLoggedUser($username, $password);
    
    if ($userId != false) {
        $_SESSION['userId'] = $userId;
        header('location: /php101');
    } else {
        $_SESSION['error'] = true;
        header('location: /php101/loginForm.php');

    }
}

