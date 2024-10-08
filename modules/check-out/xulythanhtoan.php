<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

session_start();
require('./mail/sendmail.php');
require('./admin/carbon/autoload.php');
require('config_vnpay.php');

$now = Carbon::now('Asia/Ho_Chi_Minh');
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);
$cart_payment = $_POST['payment'];
//lấy id thông tin vận chuyển
$id_dangky = $_SESSION['id_khachhang'];
$sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['id_shipping'];
$tongtien=0;
foreach ($_SESSION['cart'] as $key => $value) {
   $thanhtien=$value['soluong']*$value['giasp'];
   $tongtien +=$thanhtien;
}

if ($cart_payment == 'thanhtoankhinhanhang') {
    //thêm đơn hàng
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping) VALUE('" . $id_khachhang . "','" . $code_order . "',1,'" . $now . "','" . $cart_payment . "','" . $id_shipping . "')";
    $cart_query = mysqli_query($conn, $insert_cart);
    //thêm đơn hàng chi tiết

    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $size = $value['size'];
        $insert_order_detail = "INSERT INTO tbl_cart_details(id_product,code_cart,soluongmua,size) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "','" . $size . "')";

        mysqli_query($conn, $insert_order_detail);
    }
    echo "<script> window.location.href='?mod=thanhk&act=main'</script>";

} elseif ($cart_payment == 'vnpay') {
    // echo 'thanh toan bang vnpay';
    $vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
    $vnp_OrderInfo = 'thanh toán hóa đơn quần áo tại web';
    $vnp_OrderType = 'billpayment';

    $vnp_Amount = $tongtien * 100;
    $vnp_Locale = 'vn';
    $vnp_BankCode = 'NCB';
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    //Add Params of 2.0.1 Version
    $vnp_ExpireDate = $expire;

    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => $vnp_OrderInfo,
        "vnp_OrderType" => $vnp_OrderType,
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
        "vnp_ExpireDate" => $vnp_ExpireDate

    );

    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        $inputData['vnp_BankCode'] = $vnp_BankCode;
    }
    // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
    // }

    //var_dump($inputData);
    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashdata .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    $returnData = array(
        'code' => '00', 'message' => 'success', 'data' => $vnp_Url
    );
    if (isset($_POST['redirect'])) {
        $_SESSION['code_cart'] = $code_order;

        //thêm đơn hàng
        $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping) VALUE('" . $id_khachhang . "','" . $code_order . "',1,'" . $now . "','" . $cart_payment . "','" . $id_shipping . "')";
        $cart_query = mysqli_query($conn, $insert_cart);
        //thêm đơn hàng chi tiết

        foreach ($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $size = $value['size'];
            $insert_order_detail = "INSERT INTO tbl_cart_details(id_product,code_cart,soluongmua,size) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "','" . $size . "')";

            mysqli_query($conn, $insert_order_detail);
        }

        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
    // vui lòng tham khảo thêm tại code demo
} elseif ($cart_payment == 'paypal') {
    // echo 'thanh toan bang paypal';

} elseif ($cart_payment == 'momo') {
    // echo 'thanh toan bang momo';

}

if($cart_query){

    // gửi email sau khi đặt hàng thành công
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
            Size: ".$val['size']."
            Số lượng đơn hàng:".$val['soluong']."
        ";
    }
    $maildathang=$_SESSION['emali'];
    $mail= new Mailer();
    $mail->dathangmail($tieude,$noidung,$maildathang);
    
    
    
    unset($_SESSION['cart']);
}


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