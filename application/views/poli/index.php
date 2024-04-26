<html>

<div class="container">
    <div>
        <h2 align="center"> Data Pasien</h2>
        <div class="panel-body">
            <a href="<?php echo site_url('poli/create'); ?>" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Poli</th>
                        <th>Nama Poli</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($poli as $poli_data) : ?>
                        <tr>
                            <td><?php echo $pasien_data['id_poli']; ?></td>
                            <td><?php echo $pasien_data['nama_poli']; ?></td>
                            <td>
                                <a href="<?php echo site_url('poli/update/' . $poli_data['id_poli']); ?>" class="btn btn-success btn-sm">Update</a>
                                <a href="<?php echo site_url('poli/delete/' . $poli_data['id_poli']); ?>" class="btn btn-danger btn-sm" onclick="returnconfirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</html>