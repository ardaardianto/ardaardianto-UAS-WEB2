	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login Gagal! Username dan Password Salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda berhasil logout";
		}else if($_GET['pesan'] == "Belum Login"){
			echo "Anda harus login terlebih dahulu";
		}
	}
	?>
	<br/>
	<br/>
	<div class="kotak_login">
		<p class="tombol_login">Silahkan Login</p>
	<form action="halaman/cek_login.php" method="POST" >
		<table><center>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukan Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukan Password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" class="login_klik" value="LOGIN"></td>
			</tr></center>
		</table>
	</form>
</body>
</html>