<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Administrator (session)</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css-sendiri.css" rel="stylesheet">
  </head>
   <body>

   	<div class="navbar navbar-warna navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Autentikasi Session</a>
        </div>
       </div>
    </div>
    
<?php
defined('_VALID');
function init_login(){
	session_start();
	//simulasi data account nama dan password
	$nama='admin';
	$pass='admin';
	
	if(isset($_POST['nama'])&&isset($_POST['pass'])){
	$n=trim($_POST['nama']);
	$p=trim($_POST['pass']);

		if(($n==$nama)&&($p==$pass)){
		//jika sama, set SESSION
		$_SESSION['nlogin']='$n';
		
		//redireksi
		?>
		<script type="text/javascript">
		document.location.href="./";
		</script>
		<?php
		}
		else{
			echo 'nama/password tidak sesuai';
			return false;
		}
	}
}

function validate(){
	if(!isset($_SESSION['nlogin'])){?>
	
<div class="container">
	<div class="inner">
	<form action="" method="post">
	<table border=0 cellpadding=5>
		<tr>
			<td><label>Nama</label></td>
			<td><input type="text" class="form-control" placeholder="Masukkan Nama " name="nama" /></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" class="form-control" placeholder="Masukkan Password " name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-info" value="LOGIN" /></td>
		</tr>
	</table>
	</form>
	</div>

	<hr>
 <!-- footer -->
      <footer>
        <p>&copy; Axel P W PTI C 2011</p>
      </footer>
</div>


	
	<?php
	exit;
	}

	if(isset($_GET['m'])&&$_GET['m']=='logout'){
		//hapus SESSION
		if(isset($_SESSION['nlogin'])){
			unset($_SESSION['nlogin']);
		}
	//redireksi halaman
	?>
	<script type="text/javascript">
	document.location.href="./";
	</script>
	<?php
	}
}
?>

 </body>
</html>