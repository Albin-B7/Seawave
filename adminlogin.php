<?php
session_start();
require 'config.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        echo "Please fill your username and password";
        exit;
    }

    $sql = "SELECT id, username, fullname, password FROM admins WHERE username = :username LIMIT 1";
    $stmt = $con->prepare($sql);
    $stmt->execute([':username' => $username]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$data) {
        echo "Username <b>$username</b> doesn't exist";
        exit;
    }

    

    if (password_verify($password, $data['password'])) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['fullname'] = $data['fullname'];
        header('Location: AdminDashboard.php');
        exit;
    } else {
        echo "Password doesn't match";
        exit;
    }
}
?>
