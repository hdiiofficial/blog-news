<?php

$host = '127.0.0.1';
$dbname = 'blog';
$username = 'userrr';
$password = 'user123';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
