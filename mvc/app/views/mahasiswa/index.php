<div class="container mt-5">

  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>

      <ol class="list-group list-group-numbered">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <?= $mhs['nama'];  ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-info">Detail</a>
          </li>
        <?php endforeach; ?>
      </ol>

    </div>
  </div>


</div>