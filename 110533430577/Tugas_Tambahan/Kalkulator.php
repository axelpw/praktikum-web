<!DOCTYPE html>
<html lang="en">

   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Tugas Kalkulator</title>

    <!-- link menuju file  bootstrap.css -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- link menuju file jum.css-->
    <link href="jum.css" rel="stylesheet">
  </head>

<!-- code javascript-->
 <script type="text/javascript">
 //fungsi cek angka 
  function cekangka(angka){
    cek = /^[A-Za-z]{1,}$/;
    return cek.test(angka)
  }
  function validasi(){
    //deklarasi variabel di dalam javascript
    var bil1=document.forms["FORM"]["bil1"].value;
    var bil2=document.forms["FORM"]["bil2"].value;

    //cek jika inputan kosong
    if((bil1==null||bil1=="")||(bil2==null||bil2=="")){
      alert("Kedua inputan harus diisi");
      document.getElementById("bil1").focus();
      return false;
    }
    //cek jika inputan bukan angka
    if(cekangka(bil1)===true||cekangka(bil2)===true){
      alert("Kedua inputan harus angka");
      document.getElementById("bil1").focus();
      return true;
    }
  }
  </script>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top"> <!--class untuk menetapkan navbar pada posisi atas (top fixed) dan memodifikasi tampilan navbar -->
      
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Project Tugas Tambahan</a>
        </div>
      
    </div>

      <div class="jumbotron">
      <div class="container">
        <h1>Haaaaallo!!</h1>
        <p>Mencoba menggunakan framework bootstrap dikombinasikan dengan tugas dalam modul</p>
        
      </div>
    </div>

<!--Code PHP -->
<?php
if (isset($_POST['samadengan'])) {
  //pengambilan isi variabel
        $bil1=$_POST["bil1"];
        $bil2=$_POST["bil2"];
        $op=$_POST["op"];
        //proses hitung
        switch ($op) {
                case '+':
                        $hasil=$bil1+$bil2;
                        $selected="value='+' selected";
                        break;
                case '-':
                        $hasil=$bil1-$bil2;
                        $selected="value='-' selected";
                        break;
                case 'x':
                        $hasil=$bil1*$bil2;
                        $selected="value='x' selected";
                        break;
                case ':':
                        $hasil=$bil1/$bil2;
                        $selected="value=':' selected";
                        break;
                
                default:
                        $hasil="Proses salah ";
                        break;
        }    
}
 ?>

    <div class="container">
     <!-- membuat sebuah row  -->
      <div class="row">
        <div class="col-lg-12"> <!-- agar posisi relatif  -->
          <h2>Kalkulator PHP</h2>
          <form name="FORM" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" onsubmit="return validasi()" >
              <input type="text" name="bil1" value="<?php echo isset($bil1)?$bil1:' ';?>"/>  <!-- textbox nanti diisi variabel bil1  -->
              <select name="op" class="p1" class="btn btn-default btn-sm dropdown-toggle">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value=":">:</option>
                </select>
              <input type="text" name="bil2" value="<?php echo isset($bil2)?$bil2:' ';?>"/> <!-- textbox nanti diisi variabel bil2  -->
              <input type="submit" class="btn btn-success" name="samadengan" value="=">  <!-- class btn btn-success untuk memberi efek tombol warna hijau -->
              <input type="text" name="hasil" value="<?php echo isset($hasil)?$hasil:' ';?>"/> <!-- textbox nanti diisi variabel hasil  -->
          </form>
        </div>      
      </div>
      <hr>
 <!-- footer -->
      <footer>
        <p>&copy; Axel P W PTI C 2011</p>
      </footer>
    </div> <!-- /container -->

  </body>
</html>
