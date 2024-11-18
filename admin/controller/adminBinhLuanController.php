<?php
class adminBinhLuanController{
        public $modelBinhLuan;
        public function __construct()
        {
            $this->modelBinhLuan= new adminBinhLuan();
        }
        public function danhSachBinhLuan(){
            require_once './view/binh_luan/listBinhLuan.php';
        }
        
}