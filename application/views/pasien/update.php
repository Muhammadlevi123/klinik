<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Update Data Pasien
                </div>
                <div class="card-body">
                    <?php  if(validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $pasien['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $pasien['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tgllahir" value="<?= $pasien['tanggal_lahir']; ?>">
                        </div>
                        <br /><br />
                        <button type="submit" name="tambah" class="btn btn-primary">Update Data</button>
                    </form>

                </div>
            </div>



        </div>
    </div>
</div>