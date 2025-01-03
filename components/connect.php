<?php

$host = 'localhost';
$dbname = 'blog';
$username = 'userrr';
$password = 'user123';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
