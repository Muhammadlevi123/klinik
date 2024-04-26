<html>

<div class="container">
    <div>
        <h2 align="center"> Data Dokter</h2>
        <div class="panel-body">
            <a href="<?php echo site_url('dokter/create'); ?>" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Dokter</th>
                        <th>Spesialisasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokter as $dokter_data) : ?>
                        <tr>
                            <td><?php echo $dokter_data['id_dokter']; ?></td>
                            <td><?php echo $dokter_data['nama']; ?></td>
                            <td><?php echo $dokter_data['spesialisasi']; ?></td>
                            <td>
                                <a href="<?php echo site_url('dokter/update/' . $dokter_data['id_dokter']); ?>" class="btn btn-success btn-sm">Update</a>
                                <a href="<?php echo site_url('dokter/delete/' . $dokter_data['id_dokter']); ?>" class="btn btn-danger btn-sm" onclick="returnconfirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</html>