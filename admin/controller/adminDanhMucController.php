<?php
class adminDanhMucController{
        public $modelDanhMuc;
        public function __construct()
        {
            $this->modelDanhMuc= new adminDanhMuc();
        }
        public function danhSachDanhMuc(){
            echo "Trang Quản lý danh mục sản phẩm";
        }
}