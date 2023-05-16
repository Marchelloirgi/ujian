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
include "koneksi.php";

$id =$_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST ["nama"];
    $jenis_kelamin = $_POST ["jenis_kelamin"];
    $tanggal_lahir = $_POST ["tanggal_lahir"];
    $alamat = $_POST ["alamat"];

    $sql = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin, tanggal_lahir='$tanggal_lahir
    ,alamat='$alamat' WHERE id=$id";

    header("location:index.php");
}

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit mahasiswa</title>
</head>
<body>
    <h1>EDIT mahasiswa</h1>

    <form method="post">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></br>

        <label>jenis_kelamin</label>
        <select name="jenis_kelamin">
            <option value="L" <?php if ($row["jenis_kelamin"] == "L") echo "selected"; ?>>Laki-Laki</option>
            <option value="P" <?php if ($row["jenis_kelamin"] == "L") echo "selected"; ?>>Perempuan</option>
</select><br>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="<?php echo $row["tangggal_lahir"]; ?>"><br>

        <label>Alamat</labe>
        <textarea name="alamat" value="<?php echo $row["alamat"]; ?>"></textarea><br>

        <button type="submit">SIMPAN</button>
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
