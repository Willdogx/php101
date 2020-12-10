<?php

require __DIR__ . '/usuarios.php';

/**
 * Antes de loguearse -> $_SESSION = [];
 * Despues de loguearse -> $_SESSION = ['username' => 'Paula' ];
 */

session_start();
if (empty($_SESSION['username']) == false) {
    $loggedUser = true;
    header('location: /php101');
}
else {
    $username = $_POST['user'];
    $password = $_POST['password'];
    
    $loggedUser = correctlyLoggedUser($username, $password);
    
    if ($loggedUser == true) {
        $_SESSION['username'] = $username;
        header('location: /php101');
    }

}

session_write_close();
