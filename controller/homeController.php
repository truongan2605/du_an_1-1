<?php 


class HomeController
{
    public $modelSanPham;
    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }

    public function home(){
        require_once './view/home.php';
    }

    public function giohang(){
        require_once './view/gio_hang.php';
    }

    
    public function chitietsanpham(){
        require_once './view/chi_tiet_san_pham.php';
    }

    public function dangki(){
        require_once './view/dang_ki.php';
    }

    public function dangnhap(){
        require_once './view/dang_nhap.php';
    }





    public function danhSachSanPham(){
        $listProduct = $this->modelSanPham->getAllProduct();
        // var_dump($listProduct);die();
        require_once './view/listProduct.php';
    }

};




?>

<?php


?>