<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css-sendiri.css" rel="stylesheet">
  </head>
	<body>
		<?php
			//include file eksternal
			require_once('./proses.php');
			
			init_login();
			validate();
		?>
		<script type="text/javascript">
			document.location.href="../admin";
		</script>
	</body>
</html>