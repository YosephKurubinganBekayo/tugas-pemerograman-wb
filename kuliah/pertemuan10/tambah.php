<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          nim :
          <input type="int" name="nim" autofocus required>
        </label>
      </li>
      <li>
        <label>
          namamhs :
          <input type="text" name="namamhs" required>
        </label>
      </li>
      <li>
        <label>
          jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          tempat_lahir :
          <input type="text" name="tempat_lahir" required>
        </label>
      </li>
      <li>
        <label>
          totalsks :
          <input type="text" name="totalsks" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>s
</body>

</html>