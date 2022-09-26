<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href ='index.php';
    </script>";
  } else {
    echo 'data gagal ditambahkan';
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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="../img/favicon1.png" />
  <title>Tambah Data</title>
</head>

<body style="background-image:url(img/5.png);">


  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 style="text-align: center; color: aqua;">Form Tambah Data</h1>
      </div>
    </div>


    <div class="row">
      <div class="col" align="center">
        <div class="card" style=" background-image:url(img/50.png);">
          <form action="" method="POST" enctype="multipart/form-data">
            <label><br><br>
              <img src="img/np.jpg" width="150" style="display: block;" class="img-preview">
              <br><br>
              <input type="file" name="gambar" class="gambar" onchange="previewImage()">
            </label>
            <div class="card-body card text-dark bg-light mb-3">
              <h5 class="card-title"><label>
                  <h5>Judul Buku : </h5>
                  <input type="text" name="judul_buku" autofocusb required>
                </label></h5>
              <h5 class="card-title"><label>
                  <h5>Penulis : </h5>
                  <input type="text" name="penulis" required>
                </label></h5>
              <h5 class="card-title"><label>
                  <h5>Jumlah Halaman : </h5>
                  <input type="text" name="jumlah_halaman" required>
                </label></h5>
              <h5 class="card-title"><label>
                  <h5>Tahun Terbit : </h5>
                  <input type="text" name="tahun_terbit" required>
                </label></h5>
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="index.php" class="btn btn-warning">Kembali</a>
                <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
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