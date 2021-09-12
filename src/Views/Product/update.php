<div class="container mt-5" xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <div class="card-header">
            UPDATE PRODUCT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" class="form-control" id="product-name" name="name"
                           value=<?php echo $product['name'] ?>">
                </div>
                <div class=" form-group">
                    <label for="product-price">Price</label>
                    <input type="text" class="form-control" id="product-price" name="price"
                           value= <?php echo $product['price'] ?> placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="product-color">Color</label>
                    <input type="text" class="form-control" id="product-color" name="color"
                           value= <?php echo $product['color'] ?> placeholder="Enter color">
                </div>
                <div class="form-group">
                    <label for="product-size">Size</label>
                    <textarea type="text" class="form-control" id="product-size"
                              name="size"><?php echo $product['size'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="product-weight">Weight</label>
                    <textarea type="text" class="form-control" id="product-weight" name="weight"
                              placeholder="Enter weight"><?php echo $product['weight'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-camera">Camera</label>
                    <textarea type="text" class="form-control" id="product-camera" name="camera"
                              placeholder="Enter camera"><?php echo $product['camera'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-ROM">ROM</label>
                    <textarea type="text" class="form-control" id="product-ROM" name="ROM"
                              placeholder="Enter ROM"><?php echo $product['ROM'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-RAM">RAM</label>
                    <textarea type="text" class="form-control" id="product-RAM" name="RAM"
                              placeholder="Enter RAM"><?php echo $product['RAM'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-CPU">CPU</label>
                    <textarea type="text" class="form-control" id="product-CPU" name="CPU"
                              placeholder="Enter CPU"><?php echo $product['CPU'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-screen">Screen</label>
                    <input type="text" class="form-control" id="product-screen" name="screen"
                           value= <?php echo $product['screen'] ?> placeholder="Enter screen">
                </div>
                <div class="form-group">
                    <label for="product-bluetooth">Bluetooth</label>
                    <textarea type="text" class="form-control" id="product-bluetooth" name="bluetooth"
                              placeholder="Enter bluetooth"><?php echo $product['bluetooth'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-battery">Battery</label>
                    <textarea type="text" class="form-control" id="product-battery" name="battery"
                              placeholder="Enter battery"><?php echo $product['battery'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="product-status">Status</label>
                    <input type="text" class="form-control" id="product-status" name="status"
                           value= <?php echo $product['status'] ?> placeholder="Enter status">
                </div>
                <div class="form-group">
                    <label for="product-image">Image</label>
                    <input type="text" class="form-control" id="product-image" name="image"
                           value= <?php echo $product['image'] ?> placeholder="Enter image">
                </div>
                <div class="form-group">
                    <label for="product-quantity">Quantity</label>
                    <input type="text" class="form-control" id="product-quantity" name="quantity"
                           value= <?php echo $product['quantity'] ?> placeholder="Enter quantity">
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea type="text" class="form-control" id="product-description" name="description"
                              placeholder="Enter description"><?php echo $product['description'] ?> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
