<div class="container">
  <h3>List of All</h3>
  <div class="row">
    <div class="col-md-6">
      <form action="<?= base_url('all'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" autocomplete="off" autofocus placeholder="search keyword.." name="keyword">
          <input class="btn btn-primary" type="submit" name="submit">
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10">
      <h5> Results : <?= $total_rows; ?></h5>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($all)) { ?>
            <tr>
              <td colspan="4">
                <div class="alert alert-danger" role="alert">
                  Data not found!
                </div>
              </td>
            </tr>
          <?php } ?>
          <?php foreach ($all as $a) { ?>
            <tr>
              <td><?= ++$start; ?></td>
              <td><?= $a['name']; ?></td>
              <td><?= $a['email']; ?></td>
              <td>
                <a href="" class="badge badge-warning">detail</a>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>


      <?= $this->pagination->create_links(); ?>

    </div>
  </div>
</div>