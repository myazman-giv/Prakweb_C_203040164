<?php
require 'function.php';

// mengambil id dari url
$id_buku = $_GET['id'];

if (hapus($id_buku) > 0) {
  echo "<script>
      alert('data berhasil dihapus');
      document.location.href ='index.php';
    </script>";
} else {
  echo "<script>
  alert('data gagal dihapus');
  document.location.href ='index.php';
</script>";
}
