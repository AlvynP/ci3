<div class="container">
  <div class="row mt-1">
    <div class="col-md-6">


      <div class="card">
        <div class="card-header">
          Ubah Data Pasien
        </div>

        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $pasien['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="masukkan nama.." value="<?= $pasien['nama']; ?>">
              <small class="form-text text-danger"><?= form_error('nama'); ?>.</small>
            </div>
            <div class="form-group">
              <label for="hp">No. Handphone</label>
              <input type="number" class="form-control" name="hp" id="hp" placeholder="masukkan no. hp.." value="<?= $pasien['hp']; ?>">
              <small class="form-text text-danger"><?= form_error('hp'); ?>.</small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="masukkan email.." value="<?= $pasien['email']; ?>">
              <small class="form-text text-danger"><?= form_error('email'); ?>.</small>
            </div>
            <div class="form-group">
              <label for="poli">Poli Tujuan</label>
              <select class="form-control" id="poli" name="poli">
                <?php foreach ($poli as $p) : ?>
                  <?php if ($p == $pasien['poli']) : ?>
                    <option value="<?= $p; ?>" selected><?= $p; ?></option>
                  <?php else : ?>
                    <option value="<?= $p; ?>"><?= $p; ?></option>
                  <?php endif; ?>

                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
          </form>
        </div>
      </div>



    </div>
  </div>
</div>