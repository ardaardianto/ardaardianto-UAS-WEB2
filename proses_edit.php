<?php
include "../../koneksi.php";
$id = $_POST['id'];
$alokasi = $_POST['alokasi'];
$jumlah_dana = $_POST['jumlah_dana']; 
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$update = mysqli_query ($koneksi, "UPDATE data_covid SET alokasi = '$alokasi', jumlah_dana ='$jumlah_dana', nama = '$nama', no_hp = '$no_hp', email = '$email' WHERE id = '$id' ");
if ($update == 1) {
		header('location:home_admin.php?page=data');
	}else{
		header('location:home_admin.php');
	}
?>
