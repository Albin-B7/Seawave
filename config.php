<?php

if (session_status() === PHP_SESSION_NONE) session_start();

$host = 'localhost';
$db   = 'seawave';
$user = 'root';
$pass = '';

try {
    $con = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
