<?php
require 'functions.php';
$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE idmhs = $id");
var_dump($m)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail mahasiswa</title>
</head>

<body>
  <h3>detail mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>id mahasiswa</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>tempat lahir</th>
      <th>total sks</th>
    </tr>



    <tr>

      <td><?= $m['idmhs']; ?></td>
      <td><?= $m['nim']; ?></td>
      <td><?= $m['namamhs']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td><?= $m['tempat_lahir']; ?></td>
      <td><?= $m['totalsks']; ?></td>
    </tr>

  </table>



  <li><a href="">ubah</a> | <a href="">hapus</a></li>
  <li><a href="latihan3.php">kembalikan ke daftar mahasiswaS</a></li>


</body>

</html>