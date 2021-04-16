<?php

require'functions.php';

//cek apakah tombul submit sudah ditekan atau belum
if (isset($_POST["submit"]) ){

    //cek data berhasil ditambah atau tidak
    if(tambahStudio($_POST) > 0 ){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan !');
                document.location.href = 'partners.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan !');
                document.location.href = 'pertners.php';
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

    <title>Tambah Data Rumah Produksi</title>

</head>
<body>

            <div class="container">
                <div class="row text-center mt-3">
                    <div class="col">
                        <h2 class="text-dark">Tambah Data Rumah Produksi</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7">

                        <form name="stay-touch" method="POST">
                            <div class="mb-3">
                                <label for="idn" class="form-label text-dark"> <strong> Nomor ID </strong></label>
                                <input type="text" name="idn" id="idn" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label text-dark"> <strong> Nama Rumah Produksi </strong></label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="negara" class="form-label text-dark"> <strong>Negara</strong></label>
                                <input type="text" name="negara" id="negara" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="markas" class="form-label text-dark"> <strong> Markas Besar </strong></label>
                                <input type="text" name="markas" id="markas" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="est" class="form-label text-dark"> <strong> Tahun Berdiri </strong></label>
                                <input type="text" name="est" id="est" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                            
                        </form> 
                    </div>
                </div>
                        
            </div>
    
</body>
</html>