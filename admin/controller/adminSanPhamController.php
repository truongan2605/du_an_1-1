<?php
class adminSanPhamController{
    public $modelSanPham;
    public function __construct()
    {
        $this->modelSanPham= new adminSanPham();
    }
    public function danhSachSanPham(){
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once 'sanpham/list.php';
    }
    public function formThemSanPham(){
        require_once 'sanpham/add.php';
    }
    public function themSanPham(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $ten = $_POST['ten'];
            $mota = $_POST['mo_ta'];
            $gia = $_POST['gia'];
            $anh = $_POST['anh'];
            $error = [];
            if(empty($ten)){
                $error = "Tên sản phẩm không được để trống";
            }
            if(empty($gia)){
                $error = "Giá sản phẩm không được để trống";
            }
            if(empty($anh)){
                $error = "Ảnh sản phẩm không được để trống";
            }
        }
    }
    public function formSuaSanPham(){
        require_once 'sanpham/update.php';
    }
    public function suaSanPham(){
        
    }
    
}