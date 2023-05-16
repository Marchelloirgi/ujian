<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>UJIAN PRAKTEk</title>
</head>
<body>

<div id="container">
<div class="header"><img src="bn.png" width="100"
 height="100"><h1>Praktek Marchello</h1>
</div>

<div class="main">
<div class="left">
<h3 align="center">MENU</h3>
<ul>
<li><a href="GALERI.php">Galeri</a></li>
<li><a href="#">Hitung Persegi</a></li>
<li><a href="index.php">HOME</a></li>
</ul>
</div>

<div class="middle">
<html>
<head><title>HITUNG PERSEGI PANJANG</title></head>
<h1>MARCHELLO IRGI  </h1>
<h3> PENGHITUNG PERSEGI PANJANG </h3>
<body>
<form actiton="" method="post">
<table border=0>
<tr>
    <td>Panjang Persegi Panjang
    <td>:
    <td><input type="text" name="panjang"><br>
</tr>
<tr>
    <td>Lebar Persegi Panjang
    <td>:
    <td><input type="text" name="lebar"><br>
</tr>
<tr>
    <td><input type="submit" name="input-data" value=Input>
               
</tr>
</table>
</form>
</body>
</html>
<h5> Hasil Perhitungan Luas Persegi Panjang </h5>
<?php
if (isset ($_POST["input-data"]))
{
$panjang=$_POST["panjang"];
$lebar=$_POST["lebar"];
$luas= $panjang*$lebar;
echo "Panjang Persegi Panjang Adalah : $panjang <br>";
echo "Lebar Persegi Panjang Adalah : $lebar <br>";
echo "Rumus : $panjang * $lebar <br>";
echo "Hasil : $luas";
}
?>
</div>

<div class="right">
<h3 align="center">Social Media</h3>
<ul>
<li><a href="https://www.instagram.com/marchell_irgi/">Intagram</a></li>
<li><a href="https://www.facebook.com/marselo.marselo.37201901">Facebook</a></li>
</ul>
</div>
</div>
</div>

<div class="footer">
    <p align="center">Copyright © 2022 - Marchello Irgi.F</a></p>
</div>
</div>
</body>
</html>
