<html>

<div class="container">
    <div>
        <h2 align="center"> Data Kunjungan</h2>
        <div class="panel-body">
            <a href="<?php echo site_url('kunjungan/create'); ?>" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Nomor Rekam Medis</th>
                        <th>Keluhan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kunjungan as $kunjungan_data) : ?>
                        <tr>
                            <td><?php echo $kunjungan_data['id_kunjungan']; ?></td>
                            <td><?php echo $kunjungan_data['tanggal_kunjungan']; ?></td>
                            <td><?php echo $kunjungan_data['nomor_rm_pasien']; ?></td>
                            <td><?php echo $kunjungan_data['keluhan']; ?></td>
                            <td>
                                <a href="<?php echo site_url('kunjungan/update/' . $kunjungan_data['id_kunjungan']); ?>" class="btn btn-success btn-sm">Update</a>
                                <a href="<?php echo site_url('kunjungan/delete/' . $kunjungan_data['id_kunjungan']); ?>" class="btn btn-danger btn-sm" onclick="returnconfirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</html>