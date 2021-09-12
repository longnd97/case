<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            User list
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($users)) {
                    foreach ($users as $user):?>
                        <tr>
                            <th><?php echo $user['id'] ?></th>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['password'] ?></td>
                            <td><a href="index.php?page=product-update&id=<?php echo $user['id'] ?>" type="button"
                                   class="btn btn-warning">Edit</a></td>
                            <td><a onclick="return confirm('Bạn có muốn xóa ?')"
                                   href="   index.php?page=product-delete&id=<?php echo $user['id'] ?>" type="button"
                                   class="btn btn-danger">Delete</a></td>
                            <td><a href="index.php?page=product-detail&id=<?php echo $user['id'] ?>" type="button"
                                   class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach;
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>