<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data 
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $biodata['stb']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $biodata['nama']; ?></h6>
                <p class="card-text"><?= $biodata['alamat']; ?></p>
                <a href="<?= base_url(); ?>biodata" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>