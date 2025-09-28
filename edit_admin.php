<?php
require "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM admins WHERE id=:id";
$stmt = $con->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$admin = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<form method="POST" action="update_admin.php">
    <input type="hidden" name="id" value="<?= $admin['id'] ?>">
    Fullname: <input type="text" name="fullname" value="<?= $admin['fullname'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $admin['email'] ?>"><br>
    Username: <input type="text" name="username" value="<?= $admin['username'] ?>"><br>
    <button type="submit" name="update">Update</button>
</form>
