<?php 
$server = mysqli_connect ("localhost", "root", "", "latihan_xpplg");

if ($server) {
    echo "Koneksi Berhasil<br>";
} else {
    echo "Gagal";
}
echo "<b>BIODATA SISWA</b>";
echo "<br>";
echo "<br>";
 $nama =$_POST['nama'];
 echo "Nama saya adalah : " . $nama;
 echo "<br>";
 $nis =$_POST['nis'];
 echo "NIS saya adalah : " . $nis;
 echo "<br>";
 $rayon =$_POST['rayon'];
 echo "Rayon saya adalah : " . $rayon;
 echo "<br>";
 $rombel =$_POST['rombel'];
 echo "Rombel saya adalah : " . $rombel;
 echo "<br>";
 $alamat =$_POST['alamat'];
 echo "Alamat saya adalah : " . $alamat;
 echo "<br>";
 $tanggal =$_POST['tanggal'];
 echo "Tanggal lahir saya : " . $tanggal;
 echo "<br>";
 $umur =$_POST['umur'];
 echo "Umur saya adalah : " . $umur;
 echo "<br>";
 $sekolah =$_POST['sekolah'];
 echo "Sekolah saya : " . $sekolah;
 echo "<br>";
 echo "<br>";

 $sql ="insert into biodata (nama, nis, rayon, rombel, alamat, tanggallahir, umur, sekolah) 
 values('$nama', '$nis', '$rayon', '$rombel', '$alamat', '$tanggal', '$umur', '$sekolah')";
 
 if(mysqli_query($server, $sql)) {
     echo "penimpanan berhasil!! ";
 } else {
     echo "kurang berhasil coba lagi<br>";
 }
 

echo "<b>HASIL NILAI</b>";
echo "<br>";
echo "<br>";

 $produktif=$_POST['produktif'];
echo "nilai produktif : " .$produktif;

if ($produktif >= 90 && $produktif <= 100)
{
echo " (A)";
}else if( $produktif >= 80 )
{
echo " (B)";
}
else if( $produktif >= 70 && $produktif <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$matematika=$_POST['matematika'];

echo "nilai matematika : " .$matematika;
if ($matematika >= 90 && $matematika <= 100)
{
echo " (A)";
}else if( $matematika >= 80 )
{
echo " (B)";
}
else if( $matematika >= 70 && $matematika <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$indonesia=$_POST['indonesia'];

echo "nilai matematika : " .$matematika;
if ($indonesia >= 90 && $indonesia <= 100)
{
echo " (A)";
}else if( $indonesia >= 80 )
{
echo " (B)";
}
else if( $indonesia >= 70 && $indonesia <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$agama=$_POST['agama'];
echo "nilai agama : " .$agama;

if ($agama >= 90 && $agama <= 100)
{
echo " (A)";
}else if( $agama >= 80 )
{
echo " (B)";
}
else if( $agama >= 70 && $agama <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$pipas=$_POST['pipas'];
echo "nilai pipas : " .$pipas;

if ($pipas >= 90 && $pipas <= 100)
{
echo " (A)";
}else if( $pipas >= 80 )
{
echo " (B)";
}
else if( $pipas >= 70 && $pipas <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

?>


