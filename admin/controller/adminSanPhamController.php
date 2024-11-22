<?php
class adminSanPhamController
{
    public $modelSanPham;
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelSanPham = new adminSanPham();
        $this->modelDanhMuc = new adminDanhMuc();
    }
    public function danhSachSanPham()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once './view/sanpham/list.php';
    }
    public function formAddSanPham()
    {
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './view/sanpham/add.php';
    }
    public function postAddSanPham()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten = $_POST['ten'];
            $mo_ta = $_POST['mo_ta'];
            $gia = $_POST['gia_san_pham'];
            $so_luong = $_POST['so_luong'];
            $danh_muc_id = $_POST['danh_muc_id'];
            $anh = $_FILES['anh'];
            // lưu ảnh vào
            $file_thumb = uploadFile($anh,'./upload/');
            // mảng hình ảnh
            // $img_array = $_FILES['img_array'];

            $errors = [];
            if (empty($ten)) {
                $errors['ten'] = "Tên sản phẩm không được để trống";
            }
            if (empty($mo_ta)) {
                $errors['mo_ta'] = "Mô tả sản phẩm không được để trống";
            }
            if (empty($gia)) {
                $errors['gia'] = "Giá sản phẩm không được để trống";
            }
            if (empty($so_luong)) {
                $errors['so_luong'] = "Số lượng sản phẩm không được để trống";
            }
            // if (empty($danh_muc_id)) {
            //     $errors['danh_muc_id'] = "Ảnh sản phẩm không được để trống";
            // }
            // if(empty($anh['error']!==0)){
            //     $errors['anh'] = "Bạn cần chọn ảnh";
            // }
            
            if (empty($errors)) {
                $this->modelSanPham->insertSanPham($ten,$mo_ta,$gia,$so_luong,$danh_muc_id,$file_thumb);
                header('Location:' . BASE_URL_AMIN. '?act=san-pham');
                exit();
            } else {
                require_once './view/sanpham/add.php';
            }
        }
    }

}
