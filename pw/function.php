<?php
/*
Mochamad Yazman Yazid
203040164
*/
?>

<?php
function koneksi()
{
  // koneksi ke database
  return mysqli_connect('localhost', 'root', '', 'prakweb_c_203040164_pw');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar terpilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu!');
    //     </script>";
    return 'np.jpg';
  }

  // cek extensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('jangan upload selain gambar!');
          </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('jangan upload selain gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  //max 5mb = 5000000

  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran terlalu besar(max 5MB)!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis = htmlspecialchars($data['penulis']);
  $jumlah_halaman = htmlspecialchars($data['jumlah_halaman']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  //$gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO
              data_buku
            VALUES
              (null, '$judul_buku','$penulis', '$jumlah_halaman','$tahun_terbit','$gambar')
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id_buku)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM data_buku WHERE id = $id_buku") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id_buku = $data['id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis = htmlspecialchars($data['penulis']);
  $jumlah_halaman = htmlspecialchars($data['jumlah_halaman']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'np.jpg') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE data_buku SET 
              judul_buku = '$judul_buku',
              penulis = '$penulis',
              jumlah_halaman = '$jumlah_halaman',
              tahun_terbit = '$tahun_terbit',
              gambar = '$gambar'
              WHERE id = $id_buku";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
