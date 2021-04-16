<?php
session_start();

if(isset($_SESSION["login"])){
  header("Location : admin.php");
  exit;
}


require 'functions.php';

if( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    //cek username
    if(mysqli_num_rows($result) === 1 ){

      //cek password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"])){
        
        //set session
        $_SESSION["login"] = true ;
        
        header("Location: admin.php");
        exit;
      }
    }
    $error = true;
  
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anda harus Login</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-family:century gothic;"> <b><i> Movies Go </i></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.html">Cari Film </a>
                <a class="nav-item nav-link" href="about.html"> About </a>
                <a class="nav-item nav-link" href="staytouch.html"> Keep Touch </a>
                <a class="nav-item nav-link active" href="login.php"> Masuk </a>
                <a class="nav-item nav-link "href="registrasi.php"> Daftar </a>
              </div>
            </div>
        </div>
    </nav>
    <h3><i> Movies Go </i></h3>
    <div class="login-block">
        <h1> <strong> Silahkan Masuk</strong></h1>
        <?php if(isset($error) ) : ?>
            <p style="color: red; ">Username atau Password Anda Salah !</p>
        <?php endif ?>

        <form action=""  method="POST">
          <input type="text" value="" placeholder="Username" id="username" name="username" />
          <input type="password" value="" placeholder="Password" id="password" name="password"/>
          <button type="submit" name="login">LOGIN</button>
        </form>
    </div>
</body>
</html>