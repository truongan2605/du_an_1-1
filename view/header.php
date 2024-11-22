<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .boxcenter {
            width: 60%;
            margin: 0 auto;
        }


        .body {
            /* background-color: rgb(233, 233, 233); */
            background-color: white;
            height: 100%;
        }

        * {
            margin: 0;
            padding: 0;

        }

        .thanh1 {
            justify-content: center;
            display: flex;
        }

        header {
            /* background-color: rgb(233, 233, 233); */
            background-color: white;
            display: flex;
            /* justify-content: center; */
            /* padding: 20px; */
            width: 100%;
            margin: auto;
            height: 150px;
        }

        .logo {
            height: 100px;
            width: 100px;
            padding-top: 10px;
            margin-left: 70px;
        }


        .timkiem {
            display: flex;
            align-items: center;
            margin: 50px 100px;
        }

        .timkiem input {
            width: 600px;
            height: 40px;
            margin-right: 10px;
            border-radius: 5px;

        }

        .timkiem button {
            width: 50px;
            height: 40px;
            background-color: yellow;
            border-radius: 5px;
        }

        .button a {
            text-decoration: none;
            color: black;

        }

        .button a:hover {
            color: #0056b3;

        }

        .button {
            margin-top: 50px
        }

        .thanh2 {
            /* background-color: white; */
            background-color: rgb(233, 233, 233);

            display: flex;
            /* space between: Dùng để tạo khoảng cách bằng nhau giữa các phần tử */
            /* justify-content: space-between; */
            align-items: center;
            justify-content: center;
        }

        .thanh2 ul {
            display: flex;
            list-style: none;
            margin-right: 600px;
        }

        .thanh2 ul p {
            margin: 20px;
        }

        .thanh2 li a {
            text-decoration: none;
            color: black;
        }

        main {
            display: flex;
            margin-bottom: 50px;
        }

        aside {
            margin-left: 70px;
            /* background-color: white; */
            background-color: rgb(233, 233, 233);
            width: 15%;
            height: 300px;
        }

        aside ul {
            list-style: none;

        }

        aside li {
            /* margin-left: 20px; */
            margin: 20px;
        }

        aside a {
            text-decoration: none;
            color: black;
        }

        article img {
            height: 500px;
            width: 100%;
            padding: 10px;

        }

        .san_pham {
            text-align: center;
            height: 500px;
            width: 90%;
            background-color: #c40000;
            margin-left: 70px;
            /* display: flex; */


        }

        .san_pham form {
            display: flex;
        }

        .san_pham_noi_bat {
            text-align: center;
            height: 500px;
            width: 90%;
            /* background-color: white; */
            /* background-color: rgb(233, 233, 233); */
            margin-left: 70px;
            /* display: flex; */


        }

        .san_pham_noi_bat form {
            display: flex;

        }

        .block_sp {
            border: 2px solid black;
            width: 20%;
            height: 450px;
            margin: 30px;
            background-color: white;
            border-radius: 5px;

        }

        .img_sp img {
            width: 100%;
            height: 200px;
            margin-top: 50px;
        }

        .img_sp {
            margin-bottom: 55px;
        }

        .gia1 {
            font-size: 12px;
            color: #c0c9c1;
            text-decoration: line-through;
            margin-top: 10px;

        }

        .gia2 {
            font-size: 18px;
            color: red;
            text-decoration: none;
            margin-top: 10px;

        }

        .button_sp {
            width: 100%;
            background-color: black;
            height: 50px;


        }

        .button_sp button {
            margin-top: 20px;
            border: hidden;
            background-color: black;

        }

        .button_sp button a {
            text-decoration: none;
            color: white;
            background-color: black;
        }



        /* ------------------------------------------------- -----------------------------------------------------------------------*/

        nav {
            /* float: left; */
            /* width: 30%; */
            width: 100%;
            height: 300px;
            background: white;
            padding: 20px;
        }

        .chu {
            float: left;
            padding: 40px;
            padding-left: 100px;
            padding-right: 100px;
            width: 25%;
            background-color: white;
            height: 300px;
        }

        section::after {
            content: "";
            display: table;
            clear: both;
        }

        footer {
            background-color: #b80e0e;
            padding: 10px;
            text-align: center;
            color: white;
            height: 150px;
            display: flex;
            margin-top: 200px;
        }

        .text {
            float: left;
            width: 50%;
            margin-left: 50px;

        }

        .text1 {
            width: 50%;
            text-align: right;

        }

        .text1 input {
            width: 700px;
            height: 70px;
            margin: 40px;
            border-radius: 5px;
        }

        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* ------------------------------------------------------------------------------------------------------------------- */
        .gio_hang_body {
            display: flex;
            width: 80%;
            height: 100%;
            margin-left: 120px;
            margin-top: 50px;
        }

        .gio_hang_thanh_trai {
            background-color: rgb(233, 233, 233);
            width: 65%;
            margin-right: 20px;
            height: 150%;
        }

        .gio_hang_thanh_phai {
            background-color: rgb(233, 233, 233);
            width: 25%;
            height: 190%;

        }

        .gio_hang_thanh_trai_body {
            margin: 20px;
        }

        .gio_hang_sp {
            /* display: flex; */
            border-radius: 5px;
            border: 1px solid black;
            padding: 20px;
            width: 90%;
            margin-bottom: 50px;
        }

        .gio_hang_sp_1 {
            display: flex;
            margin-bottom: 10px;
        }

        .gio_hang_button button {
            background-color: red;
            border: hidden;
            height: 30px;
            width: 60px;
            border-radius: 5px;
            color: white;
        }

        .gio_hang_thanh_phai button {
            background-color: red;
            border: hidden;
            height: 50px;
            width: 100%;
            border-radius: 5px;
            color: white;

        }



        /* ---------------------------------------------------------------------------------------- */
        .chi_tiet_san_pham_body {
            width: 90%;
            height: 110%;
            margin-left: 40px;
            display: flex;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .chi_tiet_san_pham_img {
            width: 35%;
        }

        .chi_tiet_san_pham_img img {
            height: 300px;
            width: 400px;
        }

        .chi_tiet_san_pham_block {
            width: 65%;
            height: 120%;
            /* height: 500px; */
            /* background-color: rgb(233, 233, 233); */
            background-color: white;
        }

        .chi_tiet_san_pham_gia {
            margin-bottom: 50px;
            background: #fafafa;
            padding: 15px;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }

        .chi_tiet_san_pham_block_2 {
            display: flex;
        }

        .chi_tiet_san_pham_block_3 {
            width: 60%;
            margin: 20px;


        }

        .chi_tiet_san_pham_chinh_sach {
            border: 2px solid rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 8px;
            background-color: white;
        }

        .chi_tiet_san_pham_button {
            display: flex;
        }

        .chi_tiet_san_pham_button_1 button {
            border: 2px solid red;
            /* border: hidden; */
            background-color: white;
            color: red;
            font-size: 20px;
            padding: 10px;
            margin-right: 20px;
        }

        .chi_tiet_san_pham_button_2 button {
            border: 2px solid red;
            /* border: hidden; */
            background-color: red;
            color: white;
            font-size: 20px;
            padding: 10px;
        }

        .chi_tiet_san_pham_so_luong {
            display: flex;
            margin-bottom: 20px;
        }

        .chi_tiet_san_pham_so_luong input {
            width: 60px;
        }

        .chi_tiet_san_pham_mo_ta {
            margin-top: 50px;
        }

        .san_pham_lien_quan {
            height: 65%;
            width: 100%;
            background-color: white;
            display: flex;
        }

        .san_pham_lien_quan img {
            height: 20%;
            width: 100%;
        }

        .block_lien_quan {
            border: 1px solid black;
            border-radius: 5px;
            width: 20%;
            margin-left: 50px;
            height: 85%;
        }

        .mo_ta_lien_quan {
            width: 80%;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .button_lien_quan button {
            width: 100%;
            height: 40px;
            margin-top: 20px;
            background-color: red;
            color: white;
        }

        .chi_tiet_san_pham_binh_luan input{
            height: 50px;
            width: 60%;
        }

        .chi_tiet_san_pham_binh_luan button{
            width: 10%;
            height: 50px;
            margin-top: 20px;
            background-color: red;
            color: white;
            border: hidden;
        }
    </style>

</head>

<body>
    <div class="body">
        <header>
            <div class="thanh1">
                <div class="logo">
                    <a href="index.php">
                        <img src="./upload/logo.png" alt="" style="height: 120px; width: 130px;">
                    </a>
                </div>

                <div class="timkiem">
                    <form action="" method="get">
                        <input type="text" name="" id="" placeholder="      Tìm kiếm">
                        <button type="submit">
                            <img src="./upload/magnifying-glass-solid.svg" alt="" style="height: 20px; width: 20px;">
                        </button>
                    </form>
                </div>

                <div class="button">
                    <form action="" method="get">

                        <a href="index.php?act=dang_ki">
                            <img src="./upload/user-solid.svg" alt="" style="height: 20px; width: 20px;">

                            Đăng kí/
                        </a>


                        <a href="index.php?act=dang_nhap">
                            Đăng nhập
                        </a>

                        <a href="index.php?act=gio_hang" style="margin-left: 100px;">
                            <img src="./upload/cart-shopping-solid.svg" alt="" style="height: 20px; width: 20px;">

                            Giỏ hàng
                        </a>

                    </form>

                </div>

            </div>


        </header>

        <div class="thanh2">
            <ul>
                <li>
                    <img src="./upload/bars-solid.svg" alt="" style="height: 20px; width: 20px; margin-top: 20px;">
                </li>
                <li>
                    <a href="index.php">
                        <p>Danh mục sản phẩm</p>
                    </a>
                </li>
                <li>
                    <img src="./upload/medal-solid.svg" alt="" style="height: 20px; width: 20px; margin-top: 20px;">
                </li>
                <li>
                    <p>Đảm bảo chất lượng</p>

                </li>
                <li>
                    <img src="./upload/truck-fast-solid.svg" alt="" style="height: 20px; width: 20px; margin-top: 20px;">
                </li>
                <li>
                    <p>Vận chuyển siêu tốc</p>
                </li>
                <li>
                    <img src="./upload/phone-solid.svg" alt="" style="height: 20px; width: 20px; margin-top: 20px;">
                </li>
                <li>
                    <p>Buil PC: 0987654321</p>
                </li>


            </ul>
        </div>