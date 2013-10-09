<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head> 
	<link rel="stylesheet" type="text/css" href="desain.css">
	<title>Social Network</title>
	
</head>
<script>

function cek(huruf){
				a = /^[A-Za-z]{1,}$/;
				return a.test(huruf);
			}

function validasi()
{
var nama=document.forms["form"]["nama"].value;
var password=document.forms["form"]["password"].value;

if ((nama==null || nama=="")||(password==null|| password==""))//cek apakah field kosong atau tidak
  {
  alert("nama dan Password harus diisi");
   document.getElementById("nama").focus();//fokus kursor kembali ke field nama
  return false;
  }
  
  if(cek(nama)=== false ||cek(password)===false) //cek apakah inputan string atau bukan
  {
  	alert("nama dan passwordword harus berupa huruf");
  	 document.getElementById("nama").focus();
  	return false;
  }


 
  return true;
}
</script>

<body>
<div class="style1"> 
	<h2 class="style2">SOCIAL NETWORK</h2>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" name ="form" method="post" onsubmit="return validasi()">
		
		<input class="style3" type="text" name="nama">
		<input  class="style4" type="password" name="password">
		<input class="style5" type="submit" value="LOGIN" name="submit">
	</form>
</div>

<div id="hasillogin">
<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['nama'])&&$_POST['nama']=='axel')&&(isset($_POST['password'])&&$_POST['password']=='panda')) {
		echo "<center>Selamat datang, ". $_POST['nama']."</center>";
	}
	else{
		echo "<script>alert('nama dan/atau passwordword salah')</script>";
	}
}
 ?>
</div>
</body>
</html>