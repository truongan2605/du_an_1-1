<?php
include 'header.php';

?>
<div class="container mt-3">
    <h3>Quản Lý Sản Phẩm</h3>
</div>
<section class="content">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= BASE_URL_AMIN . '?act=form-them-san-pham' ?>">
                            <button class="btn btn-success">Thêm sản phẩm</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>ID danh mục</th>
                                    <th>Mô tả</th>
                                    <th>Giá</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php foreach ($listSanPham as $key => $sanpham): ?>
                                    <tr>
                                        <th><?php $key + 1 ?></th>
                                        <td><?= $sanpham['ten'] ?></td>
                                        <td>
                                            <!-- <?= $sanpham['ten_danh_muc'] ?> -->
                                        </td>
                                        <td><?= $sanpham['mo_ta'] ?></td>
                                        <td><?= $sanpham['gia'] ?></td>
                                        <td>
                                            <img src="<?= BASE_URL . $sanpham['anh'] ?>" alt="" width="100px"
                                                onerror="this.onerror = null; this.src='https://product.hstatic.net/1000288298/product/dsc00077_771cff22357147ddb67832b9e9c24148_master.jpg'">
                                        </td>
                                        <td><?= $sanpham['so_luong'] ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?= BASE_URL_AMIN . '?act=form-sua-san-pham&id-san-pham' . $sanPham['id'] ?>" role="button">Sửa</a>
                                            <a class="btn btn-danger" href="<?= BASE_URL_AMIN . '?act=xoa-san-pham&id-san-pham' . $sanPham['id']  ?>" role="button">Xóa</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>