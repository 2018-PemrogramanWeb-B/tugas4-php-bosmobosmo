<?php
session_start();

function greet() {
  date_default_timezone_set('Asia/Jakarta');
  $time = date('H');
  if ($time < "12") {
      echo "Selamat Pagi!!";
  } else
  if ($time >= "12" && $time < "17") {
      echo "Selamat Siang!!";
  } else
  if ($time >= "17" && $time < "19") {
      echo "Selamat Sore!!";
  } else
  if ($time >= "19") {
      echo "Selamat Malam!!";
  }
}

  if ($_SESSION['valid'] == false){
    if ($_POST['username'] == "user" &&
    $_POST['password'] == 'password') {
        $_SESSION['valid'] = true;
        $_SESSION['username'] = 'user';
        greet();
    } else {
    header('location:index.php');
    }
  } else {
  greet();
}

?>
