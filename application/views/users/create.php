<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Users
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
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Passowrd</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <br /><br />
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>

                </div>
            </div>



        </div>
    </div>
</div>