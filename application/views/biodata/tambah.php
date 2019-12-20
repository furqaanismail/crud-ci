<div class="container mt-4">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <h5 class="card-header">tambah data</h5>
        <div class="card-body">
          <form method="post" action="">
            <!-- <?php if(validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors();  ?>
              </div>
            <?php endif; ?> -->
            <div class="form-group">
              <label for="stb">Stambuk</label>
              <input type="text" class="form-control" name="stb" >
              <small class="form-text text-danger"><?= form_error('stb');  ?></small>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama"  >
              <small class="form-text text-danger"><?= form_error('nama');  ?></small>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat" >
              <small class="form-text text-danger"><?= form_error('alamat');  ?></small>
            </div>   
            <button type="submit" class="btn btn-primary">submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>