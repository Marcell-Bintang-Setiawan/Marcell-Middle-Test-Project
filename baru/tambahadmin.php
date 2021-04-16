<?php

require'functions.php';

//cek apakah tombul submit sudah ditekan atau belum
if (isset($_POST["submit"]) ){

    //cek data berhasil ditambah atau tidak
    if(tambahAdmin($_POST) > 0 ){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan !');
                document.location.href = 'jurukunci.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan !');
                document.location.href = 'jurukunci.php';
            </script>
        ";
    }
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tambah Data Admin</title>

</head>
<body>

            <div class="container">
                <div class="row text-center mt-3">
                    <div class="col">
                        <h2 class="text-dark">Tambah Data Admin</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7">

                        <!-- <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Terima Kasih</strong> ide - ide Kreatif Anda Sudah Kami Terima! 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->

                        <form name="stay-touch" method="POST">
                            <div class="mb-3">
                                <label for="nid" class="form-label text-dark"> <strong> Nomor ID </strong></label>
                                <input type="text" name="nid" id="nid" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label text-dark"> <strong> Nama Lengkap </strong></label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-dark"> <strong>Email</strong></label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label text-dark"> <strong> Nomor Telepon </strong></label>
                                <input type="text" name="telepon" id="telepon" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                            
                        </form> 
                    </div>
                </div>
                        
            </div>
    
</body>
</html>