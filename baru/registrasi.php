<?php

require'functions.php';

if(isset($_POST["register"])) {

    if( registrasi($_POST) > 0){
        echo"
        <script>
            alert('User baru berhasil ditambahkan');
            document.location.href = 'login.php';
        </script>";
    } else {
        echo mysqli_error($conn);
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
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
                <a class="nav-item nav-link" href="login.php"> Masuk </a>
                <a class="nav-item nav-link active"href="registrasi.php"> Daftar </a>
              </div>
            </div>
        </div>
    </nav>
    <h3><i> Movies Go </i></h3>
    <div class="login-block">
        <h1> <strong> Halaman Registrasi</strong></h1>
        <form action="" method="POST">
          <input type="text" value="" placeholder="Username" id="username" name="username"/>
          <input type="password" value="" placeholder="Password" id="password" name="password" />
          <input type="password" value="" placeholder="Konfirmasi Password" id="password" name="password2" />
          <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>