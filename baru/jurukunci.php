<?php

require 'functions.php';
$administrator = query("SELECT*FROM film");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
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
        <li >
            <a href="admin.php" >Dashboard</a>
        </li>
        <li class="active">
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

        <br><br>
            <h1>Administrator</h1>
            <p>Berikut ini adalah daftar administrator </p>
        <br>
        <a href="tambahadmin.php" style="margin-left: 37%;">[+] Tambah Data</a> 

        <table id="example" class="display" style="width:100%" border="1">
            <thead style="text-align: center;">
                <th>No</th>
                <th>NID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </thead>
            <tbody style="text-align: center;">
                <?php $i = 1; ?>
                <?php foreach($administrator as $row): ?>
                <tr>

                    <td><?= $i; ?></td>

                    <td><?= $row["nid"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["telepon"]; ?></td>
                    <td>
                        <button class="btn btn-warning"><a href="ubahadmin.php?id=<?= $row["id"]?>">Ubah</a></button> 
                        <button class="btn btn-danger"><a href="hapusadmin.php?id=<?= $row["id"]?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?'); ">Hapus</a></button>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ; ?>

            </tbody>
        </table>
        <br><br>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

$(document).ready(function() {
    $('#example').DataTable();
    } );

</script>

</body>
</html>