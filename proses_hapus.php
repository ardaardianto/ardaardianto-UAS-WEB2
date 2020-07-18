<?php
include "../../koneksi.php";
$id = $_GET['id'];
//print_r($id);die;
$delete = mysqli_query($koneksi,"DELETE FROM data_covid WHERE id='$id'");
if ($delete == 1) {
		header('location:home_admin.php?page=data');
	}else{
		header('location:home_admin.php');
	}
  ?>