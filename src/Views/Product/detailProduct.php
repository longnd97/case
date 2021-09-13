<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #main {
            margin-top: 50px;
        }

        #left {
            height: 600px;
            width: 50%;
            float: left;
        }

        #right {
            height: 600px;
            width: 50%;
            float: left;
        }

        #content {
            height: 70px;
            width: 100%;
            float: left;
        }
    </style>
</head>
<body>
<div id="main">
    <div id="left">
        <img src="images/<?php echo $product['image'] . ".jpg" ?>" style="width: 80%"/>
    </div>
    <div id="right">
        <p style="font-size: x-large"><?php echo strtoupper("ĐIỆN THOẠI " . $product['name'] . " - " . $product['ROM'] . " - " . $product['status']); ?></p>
        <span>Giá bán: </span><span style="color: red;font-size: x-large"><?php echo number_format($product['price']) ?>đ</span>
        <table style="margin-top: 50px;">
            <th colspan="2" style="font-size: x-large">Thông số kỹ thuật</th>
            <tr>
                <td>Màn hình:</td>
                <td><?php echo $product['screen'] ?></td>
            </tr>
            <tr>
                <td>Camera:</td>
                <td><?php echo $product['camera'] ?></td>
            </tr>
            <tr>
                <td>Chip:</td>
                <td><?php echo $product['CPU'] ?></td>
            </tr>
            <tr>
                <td>RAM:</td>
                <td><?php echo $product['RAM'] ?></td>
            </tr>
            <tr>
                <td>Bộ nhớ trong:</td>
                <td><?php echo $product['ROM'] ?></td>
            </tr>
            <tr>
                <td>Pin:</td>
                <td><?php echo $product['battery'] ?></td>
            </tr>
            <tr>
                <td>Bluetooth:</td>
                <td><?php echo $product['bluetooth'] ?></td>
            </tr>
            <tr>
                <td>Kích thước, khối lượng:</td>
                <td><?php echo $product['size'] . " - " . $product['weight'] ?></td>
            </tr>
        </table>
        <div style="margin-top: 50px;">
            <button type="submit">Thêm vào giỏ hàng</button>
        </div>
    </div>
    <div id="content">
        <div style="background: coral;font-size: x-large">Mô tả sản phẩm</div>
        <div><?php echo $product['description']; ?></div>
    </div>
</div>
</body>
</html>