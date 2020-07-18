<!DOCTYPE html>
<html>
<head>
	<title>Data Penerimaan Bantuan Covid 19</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
					<li><a href="index.php?page=home">HOME</a></li>
					<li><a href="index.php?page=about">ABOUT</a></li> 
					<li><a href="index.php?page=login">LOGIN</a></li>
				</ul>
		</div>

		<div class="badan">
			<?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];

				switch ($page) {
					case 'home':
						include "halaman/home.php";
						break;
					case 'about':
						include "halaman/about.php";
						break;
					case 'login':
						include "halaman/login.php";
					
					default:
						echo "<center><h3> *********** </h3><center>";
						break;
				}
			}else{
				include "halaman/home.php";
			}
			
			?>

		</div>
</body>
</html>