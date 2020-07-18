<?php
//mengaktifkan session
session_start();

//menghubungkan dengan koneksi
include '../koneksi.php';

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//menyelesaikan data admin dengan username dan password
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password' ");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
//print_r("$cek");die;
if($cek > 0){
	
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/home_admin.php");
}else{
	header("location:home.php?pesan=gagal");
}
?>