<?php 
// koneksi database
include_once '../function.php';


$kode_penyakit = $_POST['kode_penyakit'];
$nama_penyakit = $_POST['nama_penyakit'];
$deskripsi = $_POST['deskripsi'];
$solusi = $_POST['solusi'];
$nama_gejala =  $_POST['nama_gejala'];
$bobot_gejala =  $_POST['mb'];
$kd_gejala = $_POST['kode_gejala'];
mysqli_query($conn, "UPDATE daftar_penyakit SET kode_penyakit='$kode_penyakit', nama_penyakit='$nama_penyakit', deskripsi='$deskripsi', solusi='$solusi' WHERE kode_penyakit = '$kode_penyakit' ");

for ($i=0; $i < (count($kd_gejala)-1); $i++) { 
    mysqli_query($conn, "UPDATE daftar_gejala SET nama_gejala='$nama_gejala[$i]', mb='$bobot_gejala[$i]' WHERE kode_gejala = '".$kd_gejala[$i]."' ");
}

header("Location:pdaftarpenyakit.php");
 
?>