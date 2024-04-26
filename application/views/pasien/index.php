<html>

<div class="container">
    <div>
        <h2 align="center"> Data Pasien</h2>
        <div class="panel-body">
            <a href="<?php echo site_url('pasien/create'); ?>" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pasien as $pasien_data) : ?>
                        <tr>
                            <td><?php echo $pasien_data['id_pasien']; ?></td>
                            <td><?php echo $pasien_data['nama']; ?></td>
                            <td><?php echo $pasien_data['alamat']; ?></td>
                            <td><?php echo $pasien_data['tanggal_lahir']; ?></td>
                            <td>
                                <a href="<?php echo site_url('pasien/update/' . $pasien_data['id_pasien']); ?>" class="btn btn-success btn-sm">Update</a>
                                <a href="<?php echo site_url('pasien/delete/' . $pasien_data['id_pasien']); ?>" class="btn btn-danger btn-sm" onclick="returnconfirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</html>