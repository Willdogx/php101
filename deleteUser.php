<?php

require __DIR__ . '/usuarios.php';

$userId = $_GET['userId'];

deleteUser($userId); 
header('location: /php101/usersList.php');