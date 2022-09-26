<?php
require '../php/functions.php';
$jersey = cari($_GET['keyword']);
?>

<?php if (empty($jersey)) : ?>
  <tr>
    <td colspan="4">
      <h3 style="color: red; font-style:italic;">Jersey tidak ditemukan</h3>
    </td>
  </tr>
<?php endif; ?>

<!-- daftar jersey -->
<div class="row"><br><br><br>
  <?php foreach ($jersey as $jrs) : ?>
    <div class="col-sm-3 " align="center">
      <div class="card " style="background-image:url(img/222.png);">
        <img src="img/<?= $jrs['gambar']; ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $jrs['harga']; ?></h5>
          <h5 class="card-text"><?= $jrs['jersey']; ?></h5>
          <a href="php/detail1.php?id=<?= $jrs['id']; ?>" class="btn btn-outline-info">Lihat Detail</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>