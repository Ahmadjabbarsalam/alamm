<?php 

$judul = "=== Program biodata sederhana function === <br /><br /> ";

$namaLengkap = "Nama Lengkap = Ahmad Jabbar Salam <br /> ";
$Umur = "Umur = 16 <br />" ;
$Kelas = "Kelas = X RPl 2 <br />";
$tempatTangallahir = "Tempat tanggal lahir = Jakarta, 9 January 2008 <br />";
$nomorWhatsApp = "nomor WhatsApp = 085776755593 <br />";
$Alamat = "Alamat = Jl jati bunder no 2B Jakarta Pusat <br />";

function biodatalengkap(){
    global $judul, $namaLengkap, $Umur, $Kelas, $tempatTangallahir, $nomorWhatsApp, $Alamat;
    echo $judul, $namaLengkap, $Umur, $Kelas, $tempatTangallahir, $nomorWhatsApp, $Alamat;

}

echo biodatalengkap();

?>