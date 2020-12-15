<?php

require __DIR__ . '/usuarios.php';

$userId = $_POST['userId'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = updateUser($userId, $username, $email, $password);

if ($result == false) {
    var_dump(getLastError());
}