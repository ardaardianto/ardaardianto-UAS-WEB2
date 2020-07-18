<?php
include "../../koneksi.php";
$alokasi = $_POST['alokasi'];
$jumlah_dana = $_POST['jumlah_dana']; 
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

//membuat variabel insert
$data = mysqli_query($koneksi, "INSERT INTO data_covid (id, alokasi, jumlah_dana, nama, no_hp, email) 
	values ('','$alokasi','$jumlah_dana','$nama','$no_hp','$email')");
//print_r($data);die;
	if ($data == 1) {
		header('location:home_admin.php?page=data');
	}else{
		header('location:home_admin.php');
	}
  ?>