<?php
require_once('config.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $prep = $con->prepare($sql);
    $prep->bindParam(':username', $username);
    $prep->execute();

    $user = $prep->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['username'] = $user['username'];
        header("Location: index2.php");
        exit;
    } else {
        echo "Invalid login credentials";
    }
}
?>
