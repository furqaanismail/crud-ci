
<!-- biodata -->
<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>
        <div class="row-mt-3">
            <col-md-6>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </col-md-6>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>biodata/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="cari data" name="keyword">
                    <div class="input-group-append">
                        <span class="btn btn-primary" id="basic-addon2">Cari</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Anggota</h3>
            <?php if(empty($biodata)) : ?>
                <div class="alert alert-danger" role="alert">
                    data encrypter tidak ditemukan
                </div>  
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $biodata as $data) :  ?>
                    <li class="list-group-item">
                        <?= $data['nama']; ?>
                        <a href="<?= base_url() ?>biodata/hapus/<?= $data['id'] ?>"
                        class="badge badge-danger float-right ml-2" onclick="return confirm('yakin');">hapus</a>
                        <a href="<?= base_url() ?>biodata/ubah/<?= $data['id'] ?>"
                        class="badge badge-success float-right ml-2">ubah</a>
                        <a href="<?= base_url() ?>biodata/detail/<?= $data['id'] ?>"
                        class="badge badge-primary float-right">detail</a>
                        
                    </li>
                <?php endforeach; ?>
            </ul>   
        </div>
    </div>
</div>