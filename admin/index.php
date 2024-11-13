<?php
    include "header.php ";
    // controller dùng để chọn phần nào trong các thư mục sẽ hiển thị trên trang index
    if (isset($_GET['act'])) {

        $act= $_GET['act'];

        switch ($act) {
            case 'listsp':
                include 'sanpham/list.php';
                break;
            
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";

    }

    include "footer.php";
?>