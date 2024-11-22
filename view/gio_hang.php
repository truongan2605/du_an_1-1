<?php
    include_once 'header.php'
?>


<body>
    <div class="gio_hang_body">
        <div class="gio_hang_thanh_trai">
            <form action="">

                <h3 style="margin:20px">Giỏ hàng của bạn</h3>
                <hr>
                <div class="gio_hang_thanh_trai_body">
                    <p style="margin-bottom: 20px;">Bạn đang có ... sản phẩm trong giỏ hàng</p>

                <!-- ở đây có foreach -->
                    <div class="gio_hang_sp">
                        <div class="gio_hang_sp_1">
                            <img src="./upload/dell.jpg" alt="" style="height: 50px; width:80px; ">
                            <p style="margin-left:30px">PC CHƠI GAME HIỆU SUẤT CAO RTX 3060 12GB - 12400F ( ALL NEW - Bảo hành 36 tháng) - còn 6 Slots Order 3 Hà Nội - HCM 3 slots</p>
                        </div>

                        <div class="gio_hang_gia">
                            <div class="gia1">
                                <p>12.000.000 VND</p>
                            </div>
                            <div class="gia2">
                                <p>10.000.000 VND</p>
                            </div>

                        </div>
                        <div class="gio_hang_button">
                            <button>Xoá</button>
                        </div>
                    </div>


                    <!-- ở đây có foreach -->
                    <div class="gio_hang_sp">
                        <div class="gio_hang_sp_1">
                            <img src="./upload/dell.jpg" alt="" style="height: 50px; width:80px; ">
                            <p style="margin-left:30px">PC CHƠI GAME HIỆU SUẤT CAO RTX 3060 12GB - 12400F ( ALL NEW - Bảo hành 36 tháng) - còn 6 Slots Order 3 Hà Nội - HCM 3 slots</p>
                        </div>

                        <div class="gio_hang_gia">
                            <div class="gia1">
                                <p>12.000.000 VND</p>
                            </div>
                            <div class="gia2">
                                <p>10.000.000 VND</p>
                            </div>

                        </div>
                        <div class="gio_hang_button">
                            <button>Xoá</button>
                        </div>
                    </div>

                </div>

            </form>



        </div>

        <div class="gio_hang_thanh_phai">
            <form action="">

                <div>
                    <h4 style="margin: 30px">Tổng tiền: 
                        <div style="color: red;">
                            10.000.000 VND
                        </div>
                    </h4>

                    <button>Thanh toán</button>

                </div>

            </form>


        </div>
    </div>

</body>


<?php
    include_once 'footer.php'
?>

