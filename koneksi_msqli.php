<?php 
$server = mysqli_connect ("localhost", "root", "", "latihan_xpplg");

if ($server) {
    echo "Koneksi Berhasil<br>";
} else {
    echo "Gagal";
}

//query insert data dalam database 
$sql ="insert into biodata (nama, nis, rayon, rombel, alamat, tanggallahir, umur, sekolah) 
values('Hana Nadira Savaira', '12209035', 'Tajur 3', 'PPLG X - 4', 'Jl. Tajur', '07/01/14', '16', 'SMK WIKRAMA')";

if(mysqli_query($server, $sql)) {
    echo "penyimpanan berhasil!! ";
} else {
    echo "kurang berhasil coba lagi ";
}
?>