<!DOCTYPE HTML>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <title>Membuat Barcode Online</title>
</head>
<body>
	<form method="POST" action="" align="center">
		<h3 class="text-center text-info">Membuat Barcode Online</h3>
		<center>
			<div class="form-group">
				<label for="sesuatu">Masukan Teks</label>
				<input type="text" maxlength="30" name="textarea">
			</div>
			<button type="submit" name="tombol" class="btn btn-primary">Submit</button>
		</center>
	</form>

	<?php
	if(isset($_POST['tombol'])){
		include_once "phpqrcode/qrlib.php";
		$tempdir = "qrcode/";
		$teks = $_POST['textarea'];
		$random = rand(0,99999);
		$file = "$random.png";
		$quality = 'H';
		$ukuran = "8";
		$padding = "0";
		QRCode::png($teks,$tempdir.$file,$quality,$ukuran,$padding);
		header("location:$tempdir$file");
	}

	?>
	<p>Mantap</p>
	<br/>
	<footer>
		<center
			<em>Online Barcode Reader : https://www.dynamsoft.com/Demo/DBR/BarcodeReaderDemo.aspx</em>
		</center>
	</footer>
</body>
</html>

