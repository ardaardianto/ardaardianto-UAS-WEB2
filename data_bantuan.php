<!DOCTYPE html>
<html>
<head>
	<title>Data Penerimaan Bantuan Covid 19</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
		<div class="content">
			<header>
				<h1 class="judul">Data Penerimaan Bantuan Covid 19</h1>
				<h3 class="deskripsi">Rekapitulasi Penerimaan Bantuan Sosial Covid-19</h3>
				<h3 class="deskripsi">Sampai dengan 
					<?php 
						echo date('d-m-Y, h:i:s a');
					?>
					</h3> 
			</header>

			<div class="menu">
				<ul>
					<li><a href="index.php?page=form">TAMBAH DATA</a></li>
					<li><a href="index.php?page=data_bantuan.php">DATA BANTUAN</a></li> 
					<li><a href="index.php?page=logout">LOGOUT</a></li>
				</ul>
		</div>

		<div class="badan">
			<?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];

				switch ($page) {
					case 'form':
						include "form_tambah.php";
						break;
					case 'data':
						include "admin/data_bantuan.php";
						break;
					case 'logout':
						include "admin/logout.php";
					
					default:
						echo "<center><h3> *********** </h3><center>";
						break;
				}
			}else{
				include "form_tambah.php";
			}
			
			?>

		</div>
</body>
</html>