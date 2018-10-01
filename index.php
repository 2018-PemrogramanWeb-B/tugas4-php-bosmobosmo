<html>
  <head>
    <title>Login</title>
  </head>
  <body>

    <?php
    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      Username : <input type="text" name="username"><br>
      Password : <input type="password" name="password"><br>
      <input type="submit">
    </form>
  </body>
</html>
