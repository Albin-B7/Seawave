<?php
require "config.php";
$id = $_GET['id'];

$sql = "DELETE FROM admins WHERE id=:id";
$stmt = $con->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: adminsDashboard.php");
