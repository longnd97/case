<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Product list
        </div>
        <div class="card-body">
            <a href="index.php?page=product-create" type="button" class="btn btn-primary mb-3">Add New Product</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($products)) {
                    foreach ($products as $product):?>
                        <tr>
                            <th><?php echo $product['id'] ?></th>
                            <td><?php echo $product['name'] ?></td>
                            <td><?php echo $product['price'] ?></td>
                            <td><?php echo $product['color'] ?></td>
                            <td><a href="index.php?page=product-update&id=<?php echo $product['id'] ?>" type="button"
                                   class="btn btn-warning">Edit</a></td>
                            <td><a onclick="return confirm('Bạn có muốn xóa ?')"
                                   href="   index.php?page=product-delete&id=<?php echo $product['id'] ?>" type="button"
                                   class="btn btn-danger">Delete</a></td>
                            <td><a href="index.php?page=product-detail&id=<?php echo $product['id'] ?>" type="button"
                                   class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach;
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>