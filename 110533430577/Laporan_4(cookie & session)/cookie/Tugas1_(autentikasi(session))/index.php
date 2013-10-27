<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Administrator (session) </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css-sendiri.css" rel="stylesheet">

  </head>

  <body>
<?php
ini_set('display_errors', 1);
define('_Valid', 1);
//include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
    <div class="navbar navbar-warna navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Autentikasi Session</a>
          <a class="btn btn-danger navbar-btn" href="?m=logout">LOGOUT</a>
        </div>
        
      </div>
    </div>

    <div class="container">
      <div class="starter-template">
        <h1>Simulasi Halaman Akhir</h1> 
          <h3>SESSION<h3/>
             
          menu-menu admin ada di sini
            <hr>
 <!-- footer -->
      <footer>
        <p class="copyright">&copy; Axel P W PTI C 2011</p>
      </footer>
      </div>

  </body>
</html>
