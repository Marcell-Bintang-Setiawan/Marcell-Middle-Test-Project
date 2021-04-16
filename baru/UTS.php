<?php
	$i = 0;
    $tinggi = 5; 
    $baris;

    for ($baris = 1; $baris <= $tinggi ; $baris++) {

    // memBuat sejumlah spasi
    for ($i = 0; $i <= $tinggi - $baris; $i++) {
    echo "&nbsp"; // Karakter spasi
     }

    
    for ($i = 1; $i < 2 * $baris; $i++) {
    echo"$i"; 

}

    // Pindah baris
    echo "<br>"; 
}


?>