<?php

require_once '../commons/env.php';
require_once '../commons/function.php';

require_once './controller/adminSanPhamController.php';
require_once './controller/adminDanhMucController.php';
require_once './controller/adminDonHangController.php';
require_once './controller/adminBinhLuanController.php';

require_once './model/adminSanPham.php';
require_once './model/adminDanhMuc.php';
require_once './model/adminDonHang.php';
require_once './model/adminBinhLuan.php';

// Route
$act = $_GET['act'] ?? '/';

match($act){
    '/'=>(new adminDanhMucController())->danhSachDanhMuc(),

    'danh-muc'=>(new adminDanhMucController())->danhSachDanhMuc(),
    'form-them-danh-muc'=>(new adminDanhMucController())->formThemDanhMuc(),
    'them-danh-muc'=>(new adminDanhMucController())->postAddDanhMuc(),
    'form-sua-danh-muc'=>(new adminDanhMucController())->formSuaDanhMuc(),
    'sua-danh-muc'=>(new adminDanhMucController())->postEditDanhMuc(),
    'xoa-danh-muc'=>(new adminDanhMucController())->deleteDanhMuc(),

    'san-pham'=>(new adminSanPhamController())->danhSachSanPham(),
    'form-them-san-pham'=>(new adminSanPhamController())->formThemSanPham(),
    'them-san-pham'=>(new adminSanPhamController())->themSanPham(),
    'form-sua-san-pham'=>(new adminSanPhamController())->formSuaSanPham(),
    'sua-san-pham'=>(new adminSanPhamController())->suaSanPham(),

    'don-hang'=>(new adminDonHangController())->danhSachDonHang(),
    'binh-luan'=>(new adminBinhLuanController())->danhSachBinhLuan(),
    'danh-muc'=>(new adminDanhMucController())->danhSachDanhMuc(),
    
}
?>
