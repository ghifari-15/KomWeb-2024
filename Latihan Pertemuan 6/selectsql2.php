`<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $judul = "Lihat Biodata Mahasiswa";
?>
  <title><?= $judul ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container mt-3">
  <h2><?= $judul ?></h2>
        
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
    
        <th>ID</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php 
include "connection.php";
$sql = "SELECT * FROM myguest ORDER BY id";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) < 0) {
?>
      <tr>
        <td colspan="5">Data Kosong</td>
      </tr>
<?php
}
else {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
      <tr>
        <td>
            <input type=\"checkbox\" class=\"checkbox\" name=\"checked_id[]\" value=\"{$row['ID']}\">
        </td>
        <td>
        {$row['ID']}
        </td>
        <td>
        {$row['firstname']}
        </td>
        <td>
        {$row['lastname']}
        </td>
        <td>
        {$row['email']}</td>
        <td>
            <a href='editsql.php?id={$row['ID']}' class='btn btn-warning btn-sm'>Edit</a>
            <a href='deletesql.php?id={$row['ID']}' class='btn btn-danger btn-sm' onclick='return confirm'(\"Apakah anda yakin ingin menghapus data ini?\")'
            >Hapus</a>
        </td>
      </tr>";
}
}
?>
    </tbody>
  </table>
</div>
 
</body>
</html>
 `