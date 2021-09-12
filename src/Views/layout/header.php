<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/layout.css">
</head>
<body>
<div class="container" style="height: auto">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2">
        <a class="navbar-brand" href="index.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=product-create">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=product-update">Liên hệ</a>
                </li>
                <?php if (!isset($_SESSION['name'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=register">Đăng ký</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['name'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                            <a class="dropdown-item" href="#">Quên mật khẩu</a>
                            <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cập nhật hồ sơ</a>
                            <div class="dropdown-divider"></div>
                            <a onclick=" return confirm ('Bạn muốn đăng xuất')" class="dropdown-item"
                               href="index.php?page=logout">Đăng xuất</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"><?php echo $_SESSION['name'] ?? '' ?></a>
                    </li>

                <?php endif ?>
                <?php if ($_SESSION['email'] == 'admin'): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?page=product-list">Product-list</a>
                            <a class="dropdown-item" href="index.php?page=user-list">User-list</a>
                        </div>
                    </li>
                <?php endif ?>
            </ul>
            <form method="get" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" value="<?php echo $_REQUEST['search'] ?? '' ?>"
                       name="search" placeholder="Từ khoá" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </nav>