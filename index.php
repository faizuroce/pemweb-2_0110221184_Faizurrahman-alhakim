<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">WEB DINAMIS PHP</h1>
		<h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP <br>0110221184-Faizurrahman Alhakim-TI08</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=about">ABOUT</a></li>
			<li><a href="index.php?page=services">SERVICES</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'about':
				include "halaman/about.php";
				break;
			case 'services':
				include "halaman/services.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>