<?php

require'functions.php';


$id = $_GET["id"];

if( hapuspartners($id) > 0 ){
    echo "
            <script>
                alert('Data Berhasil Dihapus !');
                document.location.href = 'partners.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data Gagal Dihapus !');
                document.location.href = 'partners.php';
            </script>
        ";
}



?>