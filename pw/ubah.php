<?php
//session_start();
require 'function.php';

// jika tidak ada id di url
// if (!isset($_GET['id'])) {
//   header("Location:index.php");
//   exit;
// }


// amnbil id dari url
$id_buku =  $_GET['id'];

$db = query("SELECT * FROM data_buku WHERE id = $id_buku");
// cek apakah tombol ubah sudah ditekan

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
        alert('data berhasil diubah');
        document.location.href ='index.php';
      </script>";
  } else {
    echo "data gagal diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <!-- bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="../img/favicon1.png" />
  <title>Ubah Data</title>
</head>

<body style="background-image:url(../img/5.png);">

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 style="text-align: center; color: aqua;">Form Ubah Data</h1>
        <hr style="color: aqua;">
        < </div>
      </div>


      <div class="row">
        <div class="col text-center">
          <div class="card" style=" background-image:url(../img/50.png);">
            <form action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $db['id']; ?>">
              <li>
                <input type="hidden" name="gambar_lama" value="<?= $db['gambar']; ?>">
                <label>
                  <img src="img/<?= $db['gambar']; ?>" width="150" style="display: block;" class="img-preview"><br><br>
                  <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                </label>
              </li>
              <div class="card-body card text-dark bg-light mb-3">
                <h5 class="card-title"><label>
                    Judul Buku :
                    <input type="text" name="judul_buku" autofocus required value="<?= $db['judul_buku']; ?>" style="text-align: center;">
                  </label></h5>
                <h5 class="card-title"><label>
                    Penulis :
                    <input type="text" name="penulis" required value="<?= $db['penulis']; ?>" style="text-align: center;">
                  </label></h5>
                <h5 class="card-title"><label>
                    Jumlah Halaman :
                    <input type="text" name="jumlah_halaman" required value="<?= $db['jumlah_halaman']; ?>" style="text-align: center;">
                  </label></h5>
                <h5 class="card-title"><label>
                    Tahun Terbit :
                    <input type="text" name="tahun_terbit" required value="<?= $db['tahun_terbit']; ?>" style="text-align: center;">
                  </label></h5>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="index.php" class="btn btn-warning">Kembali</a>
                  <button type="submit" name="ubah" class="btn btn-success">Ubah Data</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/script.js"></script>


</body>

</html>