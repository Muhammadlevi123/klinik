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
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $pasien['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" value="<?= $pasien['password']; ?>">
                        </div>
                        <br /><br />
                        <button type="submit" name="tambah" class="btn btn-primary">Update Data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div type="submit" name="tambah" class="btn btn-primary">Update Data</button>
                    </form>

                </div>
            </div>



        </div>
    </div>
</div>