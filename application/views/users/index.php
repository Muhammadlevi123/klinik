<html>

<div class="container">
    <div>
        <h2 align="center"> Data Users</h2>
        <div class="panel-body">
            <a href="<?php echo site_url('users/create'); ?>" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $users_data) : ?>
                        <tr>
                            <td><?php echo $users_data['id_user']; ?></td>
                            <td><?php echo $users_data['username']; ?></td>
                            <td>
                                <a href="<?php echo site_url('users/update/' . $users_data['id_user']); ?>" class="btn btn-success btn-sm">Update</a>
                                <a href="<?php echo site_url('users/delete/' . $users_data['id_user']); ?>" class="btn btn-danger btn-sm" onclick="returnconfirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</html>