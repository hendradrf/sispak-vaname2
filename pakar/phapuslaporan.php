<?php 
include "../function.php";
  // $tampil = "SELECT * FROM daftar_penyakit where kode_penyakit = '".$_GET['id']."'  ";
  // $sql = mysqli_query($conn, $tampil);
  // $data = mysqli_fetch_array($sql);

	$id = $_GET['id'];
	$delete = "DELETE FROM hasil_konsul WHERE id='$id'";
	$sql = mysqli_query($conn, $delete) or die(mysqli_error($conn));
 	$data = mysqli_fetch_array($sql);
	header("Location: plaporan.php");
?>
