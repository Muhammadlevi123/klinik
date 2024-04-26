<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Update Data Kunjungan
                </div>
                <div class="card-body">
                    <?php  if(validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                            <input type="text" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" value="<?= $kunjungan['tanggal_kunjungan']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nomor_rm_pasien" class="form-label">Nomor Rekam Medis</label>
                            <input type="text" class="form-control" name="nomor_rm_pasien" id="nomor_rm_pasien" value="<?= $kunjungan['nomor_rm_pasien']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="keluhan" class="form-label">Keluhan</label>
                            <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?= $kunjungan['keluhan']; ?>">
                        </div>
                        <br /><br />
                        <button type="submit" name="tambah" class="btn btn-primary">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>