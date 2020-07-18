			<div class="halaman">
				<br/>
				<br/>
				<table width="100%" border="1">
					<tr>
						<th>NO</th>
						<th>ALOKASI</th>
						<th>JUMLAH DANA</th>
						<th>NAMA LENGKAP</th>
						<th>NO HP</th>
						<th>EMAIL</th>
						<th>AKSI</th>
					</tr>

	<?php
	include '../../koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi, "SELECT * FROM data_covid");
	while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $d['alokasi'];?></td>
			<td><?php echo $d['jumlah_dana'];?></td>
			<td><?php echo $d['nama'];?></td>
			<td><?php echo $d['no_hp'];?></td>
			<td><?php echo $d['email'];?></td>
			<td>
				<a href="form_edit.php?id=<?php echo $d['id']; ?>"> Edit || </a>
				<a href="proses_hapus.php?id=<?php echo $d['id']; ?>"> Delete </a>
			</td>
		</tr>
	<?php	
	}
	?>
	</table>