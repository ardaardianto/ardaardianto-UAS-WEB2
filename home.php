<div class="halaman">
	<br/>
	<br/>
	<table width="100%" border="1">
		<tr>
			<th>NO</th>
			<th>ALOKASI</th>
			<th>JUMLAH TRANSAKSI</th>
			<th>JUMLAH DANA</th>
		</tr>

	<?php
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi, "SELECT alokasi,COUNT(id) AS jumlah_transaksi, SUM(jumlah_dana) AS jumlah_dana FROM data_covid GROUP BY alokasi;");
	while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $d['alokasi'];?></td>
			<td><?php echo $d['jumlah_transaksi'];?></td>
			<td>Rp.<?php echo number_format($d['jumlah_dana']) ;?>,-</td>
		</tr>
	<?php	
	}
	?>
	</table>