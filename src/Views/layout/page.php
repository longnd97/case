<div class="row">
    <article class="col-12 col-sm-9 mt-2">
        <div class="col-12 col-sm-12 row mb-2">
            <?php
            if (isset($products)) {
                foreach ($products as $product):?>
                    <div class="col-sm-4">
                        <div class="card text-center" style="margin-top:10px">
                            <div class="card-header">
                                <a href="index.php?page=product-detail&id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a>
                            </div>
                            <div class="card-body">
                                <img src="images/<?php echo $product['image'] . ".jpg" ?>" style="width: 100%"/>
                            </div>
                            <div class="card-header">
                                <?php echo number_format($product['price'],0) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            } ?>
        </div>
    </article>
    <aside class="col-12 col-sm-3">
        <div class="list-group" style="margin-top: 20px">
            <a href="" type="button" style="text-align: center" class="list-group-item list-group-item-action active">
                Hãng
            </a>
            <a href="index.php?search=iphone" type="button" class="list-group-item list-group-item-action"><img src="images/logo-iphone.png"></a>
            <a href="index.php?search=samsung" type="button" class="list-group-item list-group-item-action"><img src="images/logo-samsung.png"></a>
            <a href="index.php?search=oppo" type="button" class="list-group-item list-group-item-action"><img src="images/logo-oppo.jpg"></a>
            <a href="index.php?search=vivo" type="button" class="list-group-item list-group-item-action"><img src="images/logo-vivo.jpg"></a>
            <a href="index.php?search=xiaomi" type="button" class="list-group-item list-group-item-action"><img src="images/logo-xiaomi.png"></a>
            <a href="index.php?search=realme" type="button" class="list-group-item list-group-item-action"><img src="images/logo-realme.png"></a>
        </div>
    </aside>
</div>
<footer class="card mb-2" style="margin-top: 50px;">
    <div class="text-center">
        Long Phone
    </div>
</footer>
</div>