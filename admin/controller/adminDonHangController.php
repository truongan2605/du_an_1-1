<?php

class AdminDonHangController
{
    public $modelDonHang;
    public function __construct()
    {
        $this->modelDonHang = new AdminDonHang();
    }
    public function danhSachDonHang()
    {
        $listDonHang = $this->modelDonHang->getAllDonHang();
        require_once './views/don_hang/listDonHang.php';
    }

public function detailDonHang($don_hang_id){
    $don_hang_id=$_GET['id_don_hang'];

    $donHang=$this->modelDonHang->getDetailDonHang($don_hang_id);

    $sanPhamDonHang=$this->modelDonHang->getListSpDonHang($don_hang_id);
    

    $listTrangDonHang=$this->modelDonHang->getAllTrangThaiDonHang();
    require_once './views/don_hang/DetailDonHang.php';

}
 
    public function formEditDonHang(){

        $id = $_GET['id_don_hang'];
        $DonHang = $this->modelDonHang->getDetailDonHang($id);
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();
        //lấy ra thông tin của danh mục cần sửa
        
        if($DonHang){
           require_once './views/don_hang/EditDonHang.php';
           deleteSessionError();

        }else{

            header('Location: ' . BASE_URL_AMIN . '?act=don-hang');
            exit();

        }
    }
    public function postEditDonHang(){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $don_hang_id = $_POST['don_hang_id']?? '';

            $ten_nguoi_nhan = $_POST['ten_nguoi_nhan']?? '';
            $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan']?? '';
            $email_nguoi_nhan = $_POST['email_nguoi_nhan']?? '';
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan']?? '';
            $ghi_chu = $_POST['ghi_chu']?? '';
            $trang_thai_id = $_POST['trang_thai_id']?? '';
            
            //tạo 1 mảng trống để chứa dữ liệu
            $errors = [];
            if(empty($ten_nguoi_nhan)){
                $errors['ten_nguoi_nhan'] = 'tên người nhân không được để trống';
            }

            if(empty($sdt_nguoi_nhan)){
                $errors['sdt_nguoi_nhan'] = 'số điện thoại không được để trống';
            }

            if(empty($email_nguoi_nhan)){
                $errors['email_nguoi_nhan'] = 'email không được để trống';
            }

            if(empty($dia_chi_nguoi_nhan)){
                $errors['dia_chi_nguoi_nhan'] = 'địa chỉ không được để trống';
            }
   
            if(empty($trang_thai_id)){
                $errors['trang_thai_id'] = 'trạng thía đơn hàng phải chọn';
            }            
            $_SESSION['error'] =$errors; 
            if(empty($errors)){
                // echo 'ok' ;die();
                 $this->modelDonHang->UpdateDonHang(
                    $don_hang_id,$ten_nguoi_nhan,$sdt_nguoi_nhan,$email_nguoi_nhan,$dia_chi_nguoi_nhan,$ghi_chu,$trang_thai_id,
                 );
                //  var_dump($abc);die;
                // sử lí them ambum ảnh sản phẩm 
               
                header('Location: ' . BASE_URL_AMIN . '?act=don-hang');
                // echo 'ok' ;die();
                exit();

            }else{
                $_SESSION['flash'] = true;
                header('Location: ' . BASE_URL_AMIN . '?act=form-sua-don-hang&id_don_hang=' . $don_hang_id);
                exit();
            }
        }
    }

//     public function postEditAnhSanpham(){
//         if($_SERVER['REQUEST_METHOD'] == 'POST'){
//             $san_pham_id = $_POST['san_pham_id'] ?? '';
//             $listAnhSanPhamCurrent = $this->modelSanpham->getlistAnhSanPham($san_pham_id);
//             $img_array = $_FILES['img_array'];
//             $img_delete = isset($_POST['img_delete']) ? explode(',' , $_POST['img_delete']) :[];
//             $current_img_ids = $_POST['current_img_ids'] ?? []; 
//             $upload_file = [];
//             foreach ($img_array['name'] as $key => $value){
//                 if ($img_array['error'][$key]==UPLOAD_ERR_OK) {
//                     $new_file = uploadFileAlbum($img_array, './uploads/' ,$key);
//                     if ($new_file) {
//                         $upload_file[] = [
//                             'id'=>$current_img_ids[$key] ?? null,
//                             'file' => $new_file
//                         ];
//                     }
//                 }
//             }
//             // lưu ảnh mới vào db và xóa ảnh cũ
//             foreach($upload_file as $file_info){
//                 if($file_info['id']){
//                     $old_file = $this->modelSanpham->getDetalAnhSanPham($file_info['id'])['link_hinh_anh'];
//                     $this->modelSanpham->updateAnhSanPham($file_info['id'],$file_info['file']);
//                     // xóa ảnh cũ
//                     deleteFile($old_file);

//                 }else{
//                     // thêm ảnh mới
//                     $this->modelSanpham->insertAlbumAnhsanPham($san_pham_id,$file_info['file']);

//                 }
//             }
//             // xử lí xóa ảnh 
//             foreach ($listAnhSanPhamCurrent as $anhsanpham){
//                 $anh_id = $anhsanpham['id'];
//                 if (in_array($anh_id,$img_delete)) {
//                     $this->modelSanpham->destroyAnhSanPham($anh_id);
//                     deleteFile($anhsanpham['link_hinh_anh']);
//                 }
//             }
//             header('Location: ' . BASE_URL_ADMIN . '?act=form-sua-san-pham&id_san_pham=' . $san_pham_id);
//             exit();
//         }
//     }

//   public function deleteSanpham(){
//     $id= $_GET['id_san_pham'];
//     $sanpham=$this->modelSanpham->getAllSanPham($id);
//     $listAnhSanPham =$this->modelSanpham->getlistAnhSanPham($id);
    
//     if ($sanpham) {
//         deleteFile($sanpham['hinh_anh']);
//         $this->modelSanpham->destroySanPham($id);
        
//     }
//     if ($listAnhSanPham) {
//     foreach ($listAnhSanPham as $key => $anhSP) {
//         deleteFile($anhSP['link_hinh_anh']);
//         $this->modelSanpham->destroyAnhSanPham($anhSP['$id']);
//     }
//     }
//     header("location:".BASE_URL_ADMIN.'?act=san-pham');
//     exit();
//   }
//   public function detailsanpham(){

//     $id = $_GET['id_san_pham'];
//     $sanpham = $this->modelSanpham->getOnetSanPham($id);
//     $listAnhSanPham = $this->modelSanpham->getlistAnhSanPham($id);

//     //lấy ra thông tin của danh mục cần sửa
    
//     if($sanpham){
//        require_once './views/sanpham/detailsanpham.php';
//        deleteSessionError();

//     }else{

//         header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
//         exit();

//     }
// }
  

}
