<?php
$koneksi = mysqli_connect ("localhost","root","","uasweb2");

//check connection
if (mysqli_connect_errno()){
	echo "koneksi database gagal : " .mysqli_connect_error();
}
?> 