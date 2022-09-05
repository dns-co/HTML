<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User  - www.dns.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <form action="cek_login.php" method="post">
	<h1>Membuat Login Multi User <br/> www.dns.com</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="nama .." required="required">
 
			<label>password</label>
			<input type="password" name="password" class="form_login" placeholder="password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/translexi/index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>