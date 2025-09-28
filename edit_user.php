<?php
require_once 'config.php';

if (!isset($_SESSION['username'])) {
    header('Location: adminlogin_.php');
    exit;
}

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: users.php');
    exit;
}

$stmt = $con->prepare('SELECT id, fullname, email, username FROM users WHERE id = :id LIMIT 1');
$stmt->execute([':id' => $id]);
$user = $stmt->fetch();

if (!$user) {
    header('Location: users.php');
    exit;
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit user</title></head>
<body>
  <h2>Edit user #<?= htmlspecialchars($user['id']) ?></h2>

  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
    <div>
      <label>Full name</label>
      <input type="text" name="fullname" value="<?= htmlspecialchars($user['fullname']) ?>" required>
    </div>
    <div>
      <label>Email</label>
      <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    </div>
    <div>
      <label>Username</label>
      <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div>
      <button type="submit" name="update">Save changes</button>
      <a href="users.php">Cancel</a>
    </div>
  </form>
</body>
</html>
