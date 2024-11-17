<?php
require_once './commons/env.php';
require_once './commons/function.php';

require_once './controller/homeController.php';

require_once './model/sanPham.php';
// route
$act = $_GET['act']??'/';
// if($_GET['act']){
//     $act=$_GET['act'];
// }else{
//     $act='/';
// }
// dể đảm bảo tính chất chỉ gọi 1 lần hàm controller dể xử lý request thì mình sử dụng match
match ($act){
    '/'=>(new HomeController())->home(),
    'trangchu'=>(new HomeController())->trangchu(),
}

?>