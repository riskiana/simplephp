<?php
// Include usercontroller.php so the getUsers() function is available
require_once 'UserController.php';

// Now you can call getUsers()
$users = getUsers();

?>
<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
</head>
<body>
  <h1>List of Users</h1>
  <ul>
    <?php foreach ($users as $user): ?>
      <li>
        <?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['email']) ?>)
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>