<?php
require_once 'config.php';

if (!isset($_SESSION['username'])) {
    header('Location: adminlogin_.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: users.php');
    exit;
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: users.php');
    exit;
}



$stmt = $con->prepare('DELETE FROM users WHERE id = :id');
$stmt->execute([':id' => $id]);

header('Location: users.php');
exit;
?>
