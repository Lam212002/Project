<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

 session_start();
 require ('./mail/sendmail.php');
 require ('./admin/carbon/autoload.php');

    $now=Carbon::now('Asia/Ho_Chi_Minh');
    $id_khachhang=$_SESSION['id_khachhang'];
    $code_order=rand(0,9999);
    $insert_cart ="INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."')";
    $cart_query =mysqli_query($conn,$insert_cart);
    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong=$value['soluong'];
            $insert_order_detail="INSERT INTO tbl_cart_details(id_product,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";

            mysqli_query($conn,$insert_order_detail);
        }
        $tieude="Chúc mừng bạn đã đặt hàng thành công! tại website ISHOP chuyên bán quần áo thời trang";
        $noidung="Cảm ơn quý khách đã đặt hàng đơn hàng của quý khách bao gồm";
        $i=0;
        foreach($_SESSION['cart'] as $key => $val){
            $i++;
            $noidung.="
                Sản phẩm: ".$i."
                Tên đơn hàng:".$val['product_name']."
                Mã đơn hàng:".$val['masp']."
                Giá đơn hàng:".number_format($val['giasp'],0,',','.')."VNĐ
                Số lượng đơn hàng:".$val['soluong']."
            ";
        }
        $maildathang=$_SESSION['emali'];
        $mail= new Mailer();
        $mail->dathangmail($tieude,$noidung,$maildathang);
    }


    unset($_SESSION['cart']);
   echo"<script> window.location.href='?mod=thanhk&act=main'</script>";
    

?>

<!--  -->



    <!-- code phần checkout end -->
    <!-- phần logo của các đối tác -->
    <!-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <p>ISHOP</p>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <?php get_footer() ?>

    <!-- Js Plugins -->
    <script src="../public/js/jquery-3.3.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery-ui.min.js"></script>
    <script src="../public/js/jquery.countdown.min.js"></script>
    <script src="../public/js/jquery.nice-select.min.js"></script>
    <script src="../public/js/jquery.zoom.min.js"></script>
    <script src="../public/js/jquery.dd.min.js"></script>
    <script src="../public/js/jquery.slicknav.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/main.js"></script>
</body>

</html>