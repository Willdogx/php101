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
    $username = $_POST['user'];
    $password = $_POST['password'];
    
    $userId = correctlyLoggedUser($username, $password);
    
    if ($userId != false) {
        $_SESSION['userId'] = $userId;
        header('location: /php101');
    }

}