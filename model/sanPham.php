<?php
class SanPham{
    public $conn; //Khai báo pthuoc
    public function __construct()
    {
        $this->conn = connectDB();
    }
    // Viêts hàm lấy toanf bộ DSSP
    public function getAllProduct(){
        try {
            $sql = 'SELECT * FROM san_pham';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "lỗi". $e->getMessage();
        }
    }
}