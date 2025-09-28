<?php
require_once 'config.php';


if (!isset($_SESSION['username'])) {
    header('Location: adminlogin_.php'); 
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {

    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: dashboard.php');
        exit;
    }

    
    $fullname = trim($_POST['fullname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');

    
    if ($fullname === '' || $email === '' || $username === '') {
        
        header('Location: edit_user.php?id=' . $id);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: edit_user.php?id=' . $id);
        exit;
    }

    
    $sql = "UPDATE users 
            SET fullname = :fullname, email = :email, username = :username 
            WHERE id = :id";
    $stmt = $con->prepare($sql);
    $stmt->execute([
        ':fullname' => $fullname,
        ':email'    => $email,
        ':username' => $username,
        ':id'       => $id
    ]);

    header('Location: users.php'); 
    exit;
}
?>
