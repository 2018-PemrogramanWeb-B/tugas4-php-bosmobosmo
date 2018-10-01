<?php
session_start()
?>

<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <form action="validate.php" method="post">
      Username : <input type="text" name="username" placeholder="user" required><br>
      Password : <input type="password" name="password" placeholder="password" required><br>
      <input type="submit">
    </form>
  </body>
</html>
