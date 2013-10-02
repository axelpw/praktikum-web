<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Pass By Reference</title>
  
</head>
<body>
<p><font color = "blue" size = "3">Berikut adalah contoh program yang menggunakan fungsi pass by reference</font></p>
<?php
function jumlah(&$nilai) {
    $nilai++;
}

$input=3;
jumlah($input);
echo $input;
?>
</body>
</html>