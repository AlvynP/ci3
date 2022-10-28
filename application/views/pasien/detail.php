<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Detail Data Pasien
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $pasien['nama']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $pasien['hp']; ?></h6>
          <p class="card-text"><?= $pasien['email']; ?></p>
          <p class="card-text"><?= $pasien['poli']; ?></p>
          <a href="<?= base_url(); ?>pasien" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>