<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Dokter
                </div>
                <div class="card-body">
                    <?php  if(validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_dokter" class="form-label">ID Dokter</label>
                            <input type="text" class="form-control" name="id_dokter" id="id_dokter">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="spesialisasi" class="form-label">Spesialisasi</label>
                            <input type="type" class="form-control" name="spesialisasi" id="spesialisasi">
                        </div>
                        <br /><br />
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>