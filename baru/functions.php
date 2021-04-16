<?php

//koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "movies");

function query($query){

    global $conn;
    $result = mysqli_query($conn, $query); 
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row; 
    }
    return $rows;
}


function tambahAdmin($data){
    global $conn;

    $nid =  htmlspecialchars($data["nid"]) ;
    $nama = htmlspecialchars( $data["nama"] );
    $email = htmlspecialchars( $data["email"] );
    $telepon = htmlspecialchars( $data["telepon"] );

     //query insert data
    $query = "INSERT INTO film
                VALUES
        ('', '$nid', '$nama', '$email', '$telepon')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
    
//tambah data studio/partners
function tambahStudio($data){
    global $conn;

    $idn =  htmlspecialchars($data["idn"]) ;
    $nama = htmlspecialchars( $data["nama"] );
    $negara = htmlspecialchars( $data["negara"] );
    $markas = htmlspecialchars( $data["markas"] );
    $est = htmlspecialchars( $data["est"] );

     //query insert data
    $query = "INSERT INTO partners
                VALUES
        ('', '$idn', '$nama', '$negara', '$markas', '$est')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




//fungsi hapus admin
function hapusadmin($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM film WHERE id = $id" );

    return mysqli_affected_rows($conn);
}



//fungsi hapus partners
function hapuspartners($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM partners WHERE id = $id" );

    return mysqli_affected_rows($conn);
}



//fungsi ubah data administrator
function ubahadmin($data){
    global $conn;

    $id = $data["id"]; 
    $nid =  htmlspecialchars($data["nid"]) ;
    $nama = htmlspecialchars( $data["nama"] );
    $email = htmlspecialchars( $data["email"] );
    $telepon = htmlspecialchars( $data["telepon"] );

     //query insert data
    $query = "UPDATE film SET
            nid = '$nid',
            nama = '$nama',
            email = '$email',
            telepon = '$telepon'
            WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

//fungsi ubah data rumah produksi

function ubahstudio($data){
    global $conn;

    $id = $data["id"];
    $idn =  htmlspecialchars($data["idn"]) ;
    $nama = htmlspecialchars( $data["nama"] );
    $negara = htmlspecialchars( $data["negara"] );
    $markas = htmlspecialchars( $data["markas"] );
    $est = htmlspecialchars( $data["est"] );

     //query insert data
    $query = " UPDATE partners SET
                idn = '$idn',
                nama = '$nama',
                negara = '$negara',
                markas = '$markas',
                est = '$est'
                WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function registrasi($data){

    global $conn;

    $username = strtolower( stripslashes( $data["username"] ) );
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ){
        echo "
            <script> 
                alert('Username yang anda gunakan sudah terdaftar');
            </script>    
            ";
        return false;
    }


    //konfirmasi pass
    if($password !== $password2){
        echo "
            <script> 
                alert('Konfirmasi password tidak sesuai');
            </script>    
            ";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //db
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    
    return mysqli_affected_rows($conn);



}



?>
