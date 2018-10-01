
<?php
   if ($_POST['username'] == 'user' &&
      $_POST['password'] == 'password') {
      $_SESSION['valid'] = true;
      $_SESSION['username'] = 'user';

      header('location:welcome.php');
   }else {
     header('location:index.php');
   }
?>
