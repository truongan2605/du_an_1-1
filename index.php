<?php
require_once './commons/env.php';
require_once './commons/function.php';

require_once './controller/homeController.php';

require_once './model/sanPham.php';
// route
$act = $_GET['act']??'/';

// dể đảm bảo tính chất chỉ gọi 1 lần hàm controller dể xử lý request thì mình sử dụng match
match ($act){
    '/'=>(new HomeController())->home(),
    'danh-sach-san-pham' => (new HomeController())->danhSachSanPham(),
    'gio_hang' => (new HomeController())->giohang(),
    'chi_tiet_san_pham' => (new HomeController())->chitietsanpham(),
    'dang_ki' => (new HomeController())->dangki(),
    'dang_nhap' => (new HomeController())->dangnhap(),




}

?>