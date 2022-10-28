<div class="container">
  <div class="row mt-1">
    <div class="col-md-6">


      <div class="card">
        <div class="card-header">
          Tambah Data Pasien
        </div>

        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="masukkan nama..">
              <small class="form-text text-danger"><?= form_error('nama'); ?>.</small>
            </div>
            <div class="form-group">
              <label for="hp">No. Handphone</label>
              <input type="number" class="form-control" name="hp" id="hp" placeholder="masukkan no. hp..">
              <small class="form-text text-danger"><?= form_error('hp'); ?>.</small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="masukkan email..">
              <small class="form-text text-danger"><?= form_error('email'); ?>.</small>
            </div>
            <div class="form-group">
              <label for="poli">Poli Tujuan</label>
              <select class="form-control" id="poli" name="poli">
                <option value="ORTOPHEDI">Ortophedi</option>
                <option value="PENYAKIT DALAM">Penyakit Dalam</option>
                <option value="OBGYN">Obgyn</option>
                <option value="SEPESIALIS PARU">Sepesialis Paru</option>
                <option value="SEPESIALIS JANTUNG">Sepesialis Jantung</option>
                <option value="SEPESIALIS BEDAH">Sepesialis Bedah</option>
                <option value="SEPESIALIS PENYAKIT UROLOGI">Sepesialis Urologi</option>
                <option value="SEPESIALIS KULIT">Sepesialis Kulit</option>
                <option value="SEPESIALIS SYARAF">Sepesialis Syaraf</option>
                <option value="SEPESIALIS ANAK">Sepesialis Anak</option>
                <option value="GIGI">GIGI</option>
              </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
          </form>
        </div>
      </div>



    </div>
  </div>
</div>