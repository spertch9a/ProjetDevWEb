<?php
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // TODO: Check your username and pwd
    if (true) {
      echo "Welcome " . $_SESSION['user'];
      header('REFRESH:5;URL=acceuil.php');
    }
  } else {
    echo "You are not allowed to browser thi page"
  }
 ?>
