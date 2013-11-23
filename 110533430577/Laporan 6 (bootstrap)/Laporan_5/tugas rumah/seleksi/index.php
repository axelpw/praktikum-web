<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Menciptakan Tabel</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" href="">
	</head>

	<body>
		<h2>Tambah Data</h2>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<table border="0" cellspacing="0"cellpadding="4">
				<tr>
					<td>NIM :</td>
					<td><input class="form-control" placeholder="Masukkan NIM " type="text" name="nim" /></td>
				</tr>
				<tr>
					<td>Nama :</td>
					<td><input class="form-control" placeholder="Masukkan Nama "  type="text" name="nama"  /></td>
				</tr>
				<tr>
					<td>Alamat :</td>
					<td><input class="form-control" placeholder="Masukkan Alamat " type="text" name="alamat" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-info " type="submit" value="Simpan" /></td>
				</tr>
			</table>
		</form>
		<?php
			require_once '../koneksi.php';
			//jika field nim dan nama diisi lalu disubmit
			if(isset($_POST['nim']) && isset($_POST['nama'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
					
				//tambahkan data baru ke tabel
				$sql = "INSERT INTO mahasiswa VALUES ('".$nim. "', '" .$nama. "','" .$alamat. "' )";
				$res = mysql_query($sql);
				if($res){
					echo 'Data Berhasil Ditambahkan';
					@mysql_close($res);
				}else{
					echo 'Gagal Menambah Data <br />';
					echo mysql_error();
				}
			}
			echo '<hr />';
			//Memanfaatkan script pengambilan data untuk menampilkan hasil
			require_once './seleksi.php';
		?>
	</body>
</html>