<div class="halaman">
	<br/><center>
		<form action="proses_simpan.php" method="POST">
	<table>
		<tr>
			<td>Alokasi</td>
			<td>:</td>
			<td>
				<select name="alokasi" required>
					<option value="">Pilih Jenis Alokasi</option>
					<option value="Alat Pelindung Diri">Alat Pelindung Diri</option>
					<option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
					<option value="Bantuan Kuota Mahasiswa">Bantuan Kuota Mahasiswa</option>
					<option value="Hand Sanitizer">Hand Sanitizer</option>
					<option value="Sembako Masyarakat">Sembako Masyarakat</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah Dana</td>
			<td>:</td>
			<td>
				<input type="number" name="jumlah_dana" required>
			</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" required>
			</td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td>
				<input type="number" name="no_hp" required>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="email" name="email" required>
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td> </td>
			<td>
				<input type="submit" value="Simpan Data">
			</td>
		</tr>
	</table>			
		</form>
	</center>