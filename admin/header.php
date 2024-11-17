<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- <div class="row align-items-start">
            <div class="d-flex row">
                <div class="p flex-fill col-3">
                    <div class="col" id="logo">
                        <img src="img/logo..png " alt="" height="100px">
                    </div>
                </div>
                <div class="p-4 flex-fill col-7">
                    <nav class="navbar">
                            <form class="d-flex w-75" role="search">
                                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        
                    </nav>
                </div>
                <div class="p-4 flex-fill col-2">
                    <div class="logout">
                        <a class="btn btn-outline-secondary" href="#" role="button">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div> -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary mt-3">
            <div class="container-md">
                <a class="navbar-brand" href="#">ADMIN</a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-sm" style="background-color: #adb5bd;">
            <div class="container-fluid">
                <ul class="nav justify-content-center">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= BASE_URL_AMIN.'?act=danh-muc'?>">Quản lý danh mục sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= BASE_URL_AMIN . '?act=san-pham'?>">Quản lý sản phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= BASE_URL_AMIN .'?act=don-hang'?>">Quản lý đơn hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= BASE_URL_AMIN.'?act=binh-luan'?>">Quản lý bình luận</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= BASE_URL_AMIN.'?act='?>">Quản lý người dùng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= BASE_URL_AMIN.'?act='?>">Thống kê</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= BASE_URL_AMIN.'?act='?>">Quản lý nhân viên</a>
                            </li>
                        </ul>
                    </div>
            </div>
            </ul>
        </nav>
    </div>
    </div>

