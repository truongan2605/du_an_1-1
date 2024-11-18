<?php
class adminDonHangController{
        public $modelDonHang;
        public function __construct()
        {
            $this->modelDonHang= new adminDonHang();
        }
        public function danhSachDonHang(){
            require_once './view/don_hang/listDonHang.php';
        }
}