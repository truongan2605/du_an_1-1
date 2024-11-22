<?php
include_once 'header.php'
?>

<style>
    .dang_ki_body {
        width: 55%;
        /* height: 110%; */
        height: 600px;
        background-color: whitesmoke;
        margin-left: 300px;
        margin-top: 40px;
        border-radius: 5px;
    }

    .thanh1 {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }

    .block1 a {
        text-decoration: none;
        color: black;
    }

    .block2 a {
        text-decoration: none;
        color: black;
    }

    .block3 {
        width: 95%;
        height: 400px;
        margin-left: 20px;
        padding: 30px;
    }

    .dang_ki_ten input{
        height: 40px;
        width: 90%;
        border-radius: 5px;
        border: hidden;
        margin-bottom: 25px;
    }

    .dang_ki_gioi_tinh{
        margin-bottom: 25px;

    }

    .dang_ki_ngay input{
        height: 40px;
        width: 90%;
        border-radius: 5px;
        border: hidden;
        margin-bottom: 25px;
        /* text-align: center; */
    }

    .dang_ki_email input{
        height: 40px;
        width: 90%;
        border-radius: 5px;
        border: hidden;
        margin-bottom: 25px;
    }

    .dang_ki_mk input{
        height: 40px;
        width: 90%;
        border-radius: 5px;
        border: hidden;
        margin-bottom: 25px;
    }

    .dang_ki_button{
        text-align: center;

    }

    .dang_ki_button button{
        height: 35px;
        width: 30%;
        border-radius: 5px;
        background-color: red;
        color: white;
    }
</style>

<body>
    <div class="dang_ki_body">
        <div class="thanh1">
            <div class="block1">
                <a href="">
                    <h2>Đăng nhập</h2>
                </a>
            </div>

            <div class="block2">
                <a href="">
                    <h2>Đăng kí</h2>
                </a>

            </div>

        </div>

        <div class="block3">
            <form action="">
                <div class="dang_ki_ten">
                    <input type="text" name="" id="" placeholder="     Nhập họ và tên của bạn">
                </div>

                <div class="dang_ki_gioi_tinh">
                    <input type="radio" name="gioi_tinh" id="gioi_tinh_nam" value="nam">
                    <label for="gioi_tinh_nam">Nam</label>

                    <input type="radio" name="gioi_tinh" id="gioi_tinh_nu" value="nu">
                    <label for="gioi_tinh_nu">Nữ</label>
                </div>

                <div class="dang_ki_ngay">
                    <input type="date" name="" id="">
                </div>

                <div class="dang_ki_email">
                    <input type="email" name="" id="" placeholder="     Nhập email của bạn">
                </div>

                <div class="dang_ki_mk">
                    <input type="password" name="" id="" placeholder="     Nhập mật khẩu của bạn">
                </div>

                <div class="dang_ki_button">
                    <button>Đăng kí</button>
                </div>

            </form>
        </div>


    </div>
</body>


<?php
include_once 'footer.php'

?>