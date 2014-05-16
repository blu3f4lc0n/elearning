<?php 
  session_start();
  
  $username = $_POST['username'];
  $password = $_POST['password'];


  if ($password == "jibas" && $username == "jibas") {
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;

    header('location:index.php?s=ok');

  } else {
    header('location:login.php?s=gagal');
  }
?>