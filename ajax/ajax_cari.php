<?php
require '../php/functions.php';
$jersey = cari($_GET['keyword']);
?>
<div class="container">
  <?php if (empty($jersey)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style:italic;">Jersey tidak ditemukan</p>
      </td>
    </tr>
  <?php endif; ?>
  <div class="row">
    <?php foreach ($jersey as $jrs) : ?>
      <div class="col-sm-6"><br><br><br>
        <div class="card mb-5" style="max-width: 540px; background-image:url(../img/50.png);">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="../img/<?= $jrs['gambar']; ?>" width="200">
            </div>
            <div class="col-md-7">
              <div class="card-body"><br><br><br>
                <h1 class="card-title"><?= $jrs['jersey']; ?></h1>
                <a href="detail.php?id=<?= $jrs['id']; ?>" class="btn btn-outline-info">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>