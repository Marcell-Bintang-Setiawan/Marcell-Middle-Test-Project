<?php
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}



require'functions.php';

//jumlah data admin
$data_admin = mysqli_query($conn, "SELECT * FROM film");
$jml_admin = mysqli_num_rows($data_admin);

$data_studio = mysqli_query($conn, "SELECT * FROM partners");
$jml_studio = mysqli_num_rows($data_studio);


?>




<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<link rel="stylesheet" href="admin.css">
</head>
<body>


<div class="wrapper">
	
<nav id="sidebar">
    <div class="sidebar-header">
        <img src="logo.png" alt="" class="img-fluid" width="120px">
    </div>
    <ul class="lisst-unstyled components">
        <p> <i> Movies Go </i></p>

        <li class="active">
            <a href="admin.php" >Dashboard</a>
        </li>
        <li>
            <a href="jurukunci.php">Administrator</a>
        </li>
        <li>
            <a href="partners.php">Partners</a>
        </li>
        <li >
            <a href="logout.php">Logout</a>
        </li>
    </ul>
</nav>

<div class="container">
<div id="content">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn  btn-info">
            <i class="fas fa-align-left"></i>
            <span></span>
        </button>
    </div>
</nav>

<br>
    <h1><b>Dashboard</b></h1>
    

    <div class="line"></div>
        <h3>Selamat Datang di Halaman Administrator</h3>
        <p>Disini anda dapat mengubah, menambah dan menghapus isi dari data yang telah disediakan. Harap selalu berhati - hati dalam mengolah data yang ada.</p><br>

        
        <div class="row ">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body bg-info">
                <h5 class="card-title"> <b> Data Administrator </b></h5>
                <h6 class="card-text"> <b> Jumlah Data Administrator : </b></h6>
                <h1><?= $jml_admin ?></h1>
            </div>
            
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-warning">
                    <h5 class="card-title"> <b> Data Rumah Produksi / Studio</b></h5>
                    <h6 class="card-text"> <b> Jumlah Data Rumah Produksi : </b> </h6>
                    <h1><?= $jml_studio ?></h1>
                    </div>
                </div>
            </div>
        </div>

        </div>
        
    </div>
    
        
    

</div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>

</body>
</html>