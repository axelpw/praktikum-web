<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Pre Selecting Data Checkbox</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Buku : <br />
		<input type="checkbox" name="Buku[]" value="Harry Potter"  
		<?php
			if($_POST['Buku[]']="Harry Potter"){
				echo 'checked="checked"';
			}
		?>		
		/>Harry Potter <br /> <!--memeriksa apakah yang dipilih "Harry Potter"-->
		
		<input type="checkbox" name="Buku[]" value="Da Vinci Code"  
		<?php
			if($_POST['Buku[]']="Da Vinci Code"){
				echo 'checked="checked"';
			}
		?>		
		/>Da Vinci Code <br /> <!--memeriksa apakah yang dipilih "Da Vinci Code"-->
		
		<input type="checkbox" name="Buku[]" value="Laskar Pelangi"  
		<?php
			if($_POST['Buku[]']="Laskar Pelangi"){
				echo 'checked="checked"';
			}
		?>		
		/>Laskar Pelangi <br /> <!--memeriksa apakah yang dipilih "Laskar Pelangi"-->

		<input type="submit" value="ok" />
	</form>
<?php
	// Ekstraksi nilai
	if (isset($_POST['Buku'])) {
		foreach ($_POST['Buku'] as $key => $val) {
		echo $key . ' -> ' .$val . '<br />';
		}
	}
?>
</body>
</html>