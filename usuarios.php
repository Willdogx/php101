<?php

require __DIR__ . '/db.php';

function fetchUsers() {
    global $pdo;

    $result = $pdo->query('SELECT * FROM `users`');

    return $result->fetchAll();
}

function createNewUser($username, $password, $email) {
    global $pdo;

    $result = $pdo->query("INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')");

    if (!$result) {
        return false;
    }

    return $pdo->lastInsertId();
}

function deleteUser($userId)
{
    global $pdo;

    $result = $pdo->query("DELETE FROM `users` WHERE id = $userId");

    return $result;
}

function correctlyLoggedUser($username, $password) {
    $users = fetchUsers();

    foreach ($users as $registeredUser) {
        if (($username == $registeredUser['username'] || $username == $registeredUser['email']) && $password == $registeredUser['password']) {
            return $registeredUser['id'];
        }
    }

    return false;
}

function isValidPassword($password) {
    return strlen($password) >= 8;
}