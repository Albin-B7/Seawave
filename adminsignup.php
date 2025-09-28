<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $tempPass = $_POST['password'] ?? '';

    if ($fullname === '' || $email === '' || $username === '' || $tempPass === '') {
        echo "All fields required";
        exit;
    }

    
    $check = $con->prepare("SELECT id FROM admins WHERE username = :u OR email = :e");
    $check->execute([':u'=>$username, ':e'=>$email]);
    if ($check->fetch()) {
        echo "Username or email already in use";
        exit;
    }

    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admins (fullname, email, username, password) VALUES (:fullname, :email, :username, :password)";
    $prep = $con->prepare($sql);
    $prep->execute([
        ':fullname' => $fullname,
        ':email'    => $email,
        ':username' => $username,
        ':password' => $password
    ]);

    header("Location: adminlogin_.php"); 
    exit;
}
?>
