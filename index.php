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
<h3 align="center">BERANDA</h3>
<p> HAII NAMA SAYA MARCHELLO IRGI.F</P> 
</div>
 
<div class="middle">
<?php
include 'koneksi.php';

$sql ="SELECT * FROM mahasiswa";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
    <h1>Data mahasiswa</h1>

    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1">
        <tr>
            <th>ID mahasiswa</th>
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>aksi</th>
</tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
        <td>
            <?php echo $row["id"]; ?>
            </td>
            <td>
            <?php echo $row["nama"]; ?>
            </td>
            <td>
            <?php echo $row["jenis_kelamin"]; ?>
            </td>
            <td>
            <?php echo $row["tanggal_lahir"]; ?>
            </td>
            <td>
            <?php echo $row["alamat"]; ?>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row["id"]; ?>">Hapus</a>

            <?php } ?>
            </td>
            </tr>
            </table>
</body>
</html>
</div>

<div class="right">
<h3 align="center">Social Media</h3>
<ul>
<li><a href="https://www.instagram.com/marchell_irgi/">Intagram</a></li>
<li><a href="https://www.facebook.com/marselo.marselo.37201901">Facebook</a></li>
<h3 align="center">MENU</h3>
<ul>
<li><a href="GALERI.php">Galeri</a></li>
<li><a href="persegi.php">Hitung Persegi</a></li>
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
