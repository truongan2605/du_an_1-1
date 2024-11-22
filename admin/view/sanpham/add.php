<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="container w-75 mt-3">
    <h3>Quản Lý Sản Phẩm</h3>
</div>
<section class="content">
    <div class="container-fluid w-75 mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm sản phẩm</h3>
                    </div>
                    <form action="<?= BASE_URL_AMIN . '?act=them-san-pham' ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body ">
                            <div class="form-group col-sm-12 m-1">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="ten" placeholder="Tên sản phẩm">
                                <?php if (isset($errors['ten_san_pham'])) { ?>
                                    <p class="text-danger"><?= $errors['ten_san_pham'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="form-group col-sm-12 m-1">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="mo_ta" placeholder="Mô tả"></textarea>
                            </div>
                            <div class="form-group col-sm-12 m-1">
                                <label>Giá sản phẩm</label>
                                <input type="number" class="form-control" name="gia_san_pham" placeholder="Giá sản phẩm">
                                <?php if (isset($errors['gia_san_pham'])) { ?>
                                    <p class="text-danger"><?= $errors['gia_san_pham'] ?></p>
                                <?php } ?>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-6 mt-1">
                                    <label>Số lượng</label>
                                    <input type="number" class="form-control" name="so_luong" placeholder="Số lượng">
                                    <?php if (isset($errors['so_luong'])) { ?>
                                        <p class="text-danger"><?= $errors['so_luong'] ?></p>
                                    <?php } ?>
                                </div>
                                <div class="form-group col-md-6 mt-1">
                                    <label>Danh mục</label>
                                    <select class="form-select" name="danh_muc_id" aria-label="Example select with button addon">
                                        <option selected disabled>Chọn danh mục sản phẩm</option>
                                            <?php foreach ($listDanhMuc as $danhMuc): ?>
                                                <option value="<?= $danhMuc['id'] ?>"><?= $danhMuc['ten_danh_muc'] ?></option>
                                            <?php endforeach ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 m-1">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="anh" placeholder="Hình ảnh">
                                <?php if (isset($errors['hinh_anh'])) { ?>
                                    <p class="text-danger"><?= $errors['hinh_anh'] ?></p>
                                <?php } ?>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</html>