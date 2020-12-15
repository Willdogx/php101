<?php

require __DIR__ . '/db.php';

function fetchUsers($userId = null) { // valor default
    global $pdo;

    $queryString = 'SELECT * FROM `users`';
    if ($userId != null) {
        $queryString .= " WHERE id = $userId";
    }
    $result = $pdo->query($queryString);

    if ($userId !== null) {
        return $result->fetch();
    }

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

function updateUser($userId, $username, $email, $password) {
    global $pdo;

    $result = $pdo->query(
        "UPDATE users
        SET username = '$username',
            email = '$email',
            password = '$password'
        WHERE id = $userId"
    );

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

function isLoggedIn()
{
    session_start();
    
    $result = empty($_SESSION['userId']) == false;

    session_write_close();

    return $result;
}