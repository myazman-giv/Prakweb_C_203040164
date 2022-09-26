<?php
/*
Mochamad Yazman Yazid
203040164
*/
?>

<?php
require 'function.php';
$data_buku = query("SELECT * FROM data_buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar buku-buku</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body style="background-image:url(img/50.png);">

  <body>
    <br>
    <h3 align=center>Koleksi Buku</h3>
    <hr style="color: black;">

    <a href="tambah.php" class="btn btn-info" style="position:absolute; left: 20px;">Tambah Buku</a>
    <br><br>

    <table border=" 1" cellpadding="10" cellspacing="0" class="table table-success table-striped">
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Halaman</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($data_buku as $db) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><img src="img/<?= $db['gambar']; ?>" width="60" height="70"></td>
          <td><?= $db['judul_buku']; ?></td>
          <td><?= $db['penulis']; ?></td>
          <td><?= $db['tahun_terbit']; ?></td>
          <td><?= $db['jumlah_halaman']; ?></td>
          <td>
            <a href="ubah.php?id=<?= $db['id']; ?>" class="btn btn-warning">Ubah</a>
            <a href="hapus.php?id=<?= $db["id"]; ?>" onclick="
          return confirm('yakin?);" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </body>

</html>