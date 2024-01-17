<?php
// judul
$judul = "=== Program Angkot sederhana === <br /><br /> ";
echo $judul;

// ketersediaan angkot
function cekKetersediaan($nomorAngkot){
    $angkotDiperbaiki = [2, 9, 12, 17];
    $angkotTersedia = [1, 3, 10, 11];

    if (in_array($nomorAngkot, $angkotDiperbaiki)) {
        return "Angkot no - $nomorAngkot sedang diperbaiki <br/>";
    } elseif (in_array($nomorAngkot, $angkotTersedia)) {
        return "Angkot no - $nomorAngkot tersedia <br/>";
    } else {
        return "Angkot no - $nomorAngkot tidak tersedia <br/>";
    }
}

// Angkot 1-20
for ($i = 1; $i <= 20; $i++) {
    echo cekKetersediaan($i);
}


?>