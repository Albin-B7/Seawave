<?php
require "config.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    $sql = "UPDATE admins SET fullname=:fullname, email=:email, username=:username WHERE id=:id";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":fullname", $fullname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: adminsDashboard.php");
}
