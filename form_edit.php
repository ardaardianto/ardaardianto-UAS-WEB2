<div class="halaman">
	<br/><center>
		<?php
		include "../../koneksi.php";
		$id = $_GET['id'];
		$data = mysqli_query ($koneksi,"SELECT * FROM data_covid WHERE id = '$id'");
		while($d = mysqli_fetch_array($data)){
			?>
		<form action="proses_edit.php" method="POST">
	<table>
		<tr>
			<td>Alokasi</td>
			<td>:</td>
			<td>

				<input type="hidden" name="id" value="<?php echo $d['id'];?>">
				<select name="alokasi">
					<option value="Alat Pelindung Diri"<?php if($d['alokasi'] == 'Alat Pelindung Diri') 
					echo 'selected="selected"';?> >Alat Pelindung Diri</option>
					<option value="Logistik Mahasiswa"<?php if($d['alokasi'] == 'Logistik Mahasiswa') 
					echo 'selected="selected"';?> >Logistik Mahasiswa</option>
					<option value="Bantuan Kuota Mahasiswa" <?php if($d['alokasi'] == 'Bantuan Kuota Mahasiswa') 
					echo 'selected="selected"';?> >Bantuan Kuota Mahasiswa</option>
					<option value="Hand Sanitizer" <?php if($d['alokasi'] == 'Hand Sanitizer') 
					echo 'selected="selected"';?> >Hand Sanitizer</option>
					<option value="Sembako Masyarakat" <?php if($d['alokasi'] == 'Sembako Masyarakat') 
					echo 'selected="selected"';?> >Sembako Masyarakat</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah Dana</td>
			<td>:</td>
			<td>
				<input type="number" name="jumlah_dana" value="<?php echo $d['jumlah_dana'];?>">
			</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" value="<?php echo $d['nama'];?>">
			</td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td>
				<input type="number" name="no_hp" value="<?php echo $d['no_hp'];?>">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="email" name="email" value="<?php echo $d['email'];?>">
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
	<?php
	}
	?>			
		</form>
	</center>