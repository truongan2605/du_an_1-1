<?php
class adminSanPham
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllSanPham()
    {
        try {
            $sql = 'SELECT san_pham.*, danh_muc.ten_danh_muc
            FROM san_pham
            INNER JOIN danh_muc ON san_pham.danh_muc_id = danh_muc.id;';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'lỗi' . $e->getMessage();
        }
    }
    public function insertSanPham($ten,$mo_ta,$gia,$so_luong,$danh_muc_id,$anh)
    {
        try {
            $sql = 'INSERT INTO san_pham(ten_san_pham,mo_ta,gia_san_pham,so_luong,danh_muc_id,hinh_anh) 
            VALUES (:ten_san_pham,:mo_ta,:gia_san_pham,:so_luong,:danh_muc_id,:anh)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':ten_san_pham' => $ten,
                ':mo_ta' => $mo_ta,
                ':gia_san_pham' => $gia,
                ':so_luong' => $so_luong,
                ':danh_muc_id' => $danh_muc_id,
                ':anh' => $anh
            ]);
            return true;
        } catch (Exception $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

}
