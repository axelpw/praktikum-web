<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css-sendiri.css" rel="stylesheet">
  </head>
	<body>
		
		<?php
			ini_set('display_errors',1);
			//Meng-include file koneksi dan data handler
			require_once '../koneksi.php';
			require_once './data_handler.php';
			
			//Konstanta nama tabel
			define('MHS', 'mahasiswa');
			
			//Memanggil fungsi data handler
			data_handler('?m=data');
		?>
	</body>
</html>
