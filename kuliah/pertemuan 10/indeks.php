<?php
// koneksi database
$db = mysqli_connect('localhost', 'root', '', 'dbmahasiswa');

//query data mahasiswa
$result = mysqli_query($db, 'SELECT * FROM mahasiswa');

//ubah data ke dalam aray
// $row = mysqli_fetch_row($result);//aray numerik
// $row = mysqli_fetch_assoc($result);//aray asosiative
// $row = mysqli_fetch_aray($result);//aray dua duanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
var_dump($rows);
//tampung ke variabel  mahasiswa
$mahasiswa = $rows;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>daftar data mahasiswa</title>
</head>

<body>

</body>

</html>