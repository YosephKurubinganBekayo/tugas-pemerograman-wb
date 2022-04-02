<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>id mahasiswa</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>tempat lahir</th>
      <th>Jurusan</th>
      <th>total sks</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $i++; ?></td>
        <td><?= $m['idmhs']; ?></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['namamhs']; ?></td>
        <td><?= $m['tempat_lahir']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td><?= $m['totalsks']; ?></td>

        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>