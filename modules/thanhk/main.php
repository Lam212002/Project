<?php
session_start();
use Carbon\Carbon;
use Carbon\CarbonInterval;

require('./admin/carbon/autoload.php');

$now = Carbon::now('Asia/Ho_Chi_Minh');
//  if()

if (isset($_GET['vnp_Amount'])) {
  $vnp_Amount = $_GET['vnp_Amount'];
  $vnp_BankCode = $_GET['vnp_BankCode'];
  $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
  $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
  $vnp_PayDate = $_GET['vnp_PayDate'];
  $vnp_TmnCode = $_GET['vnp_TmnCode'];
  $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
  $vnp_CardType = $_GET['vnp_CardType'];
  $code_cart = $_SESSION['code_cart'];
  // $shipping =$_SESSION['id_shipping'];

  //thêm database vnpay
  $insert_vnpay = "INSERT INTO tbl_vnpay(vnp_amount,vnp_bankcode,vnp_banktranno,vnp_cardtype,vnp_orderInfo,vnp_paydate,vnp_tmncode,vnp_transactionno,code_cart)
    VALUE('" . $vnp_Amount . "','" . $vnp_BankCode . "','" . $vnp_BankTranNo . "','" . $vnp_CardType . "','" . $vnp_OrderInfo . "','" . $vnp_PayDate . "','" . $vnp_TmnCode . "','" . $vnp_TransactionNo . "','" . $code_cart . "')";


  $cart_query = mysqli_query($conn, $insert_vnpay);
  if ($cart_query) {
    unset($_SESSION['cart']);
  } else {
    echo 'Giao dịch thất bại';
  }
  ///chuyển khoản momo
}elseif(isset($_GET['partnerCode'])){
  $id_khachhang = $_SESSION['id_khachhang'];
  $code_order = rand(0, 9999);
  $partnerCode = $_GET['partnerCode'];
  $orderId = $_GET['orderId'];
  $amount	 = $_GET['amount'];
  $orderInfo = $_GET['orderInfo'];
  $orderType = $_GET['orderType'];
  $transId = $_GET['transId'];
  $payType	= $_GET['payType'];
  $cart_payment='momo';

  
  $sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_khachhang' LIMIT 1");
  $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
  $id_shipping = $row_get_vanchuyen['id_shipping'];
  
  //thêm database momo
  $insert_momo = "INSERT INTO tbl_momo(partner_code,order_id,amount,order_info	,order_type,trans_id,pay_type,code_cart)
    VALUE('" . $partnerCode . "','" . $orderId . "','" . $amount . "','" . $orderInfo . "','" . $orderType . "','" . $transId . "','" . $payType . "','".$code_order."')";


  $cart_query = mysqli_query($conn, $insert_momo);
  if ($cart_query) {
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping) VALUE('" . $id_khachhang . "','" . $code_order . "',1,'" . $now . "','" . $cart_payment . "','" . $id_shipping . "')";
    $cart_query = mysqli_query($conn, $insert_cart);


    foreach ($_SESSION['cart'] as $key => $value) {
      $id_sanpham = $value['id'];
      $soluong = $value['soluong'];
      $size = $value['size'];
      $insert_order_detail = "INSERT INTO tbl_cart_details(id_product,code_cart,soluongmua,size) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "','" . $size . "')";
  
      mysqli_query($conn, $insert_order_detail);
    }
    unset($_SESSION['cart']);
  } else {
    echo 'Giao dịch thất bại';
  }


} else {
  if (isset($_GET['thanhtoan']) == 'paypal') {
    $code_order = rand(0, 9999);
    $cart_payment = 'paypal';
    $id_khachhang = $_SESSION['id_khachhang'];

    //lấy id thông tin vận chuyển
    $id_dangky = $_SESSION['id_khachhang'];

    $sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
    $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
    $id_shipping = $row_get_vanchuyen['id_shipping'];
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
    if ($cart_query) {
      unset($_SESSION['cart']);
      
    } else {
      echo 'Giao dịch thất bại';
    }
  }
}




?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặt hàng thành công</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
      text-align: center;
    }

    h1 {
      text-align: center;
      font-size: 2em;
      margin-bottom: 20px;
    }

    p {
      font-size: 1em;
      line-height: 1.5;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      margin-bottom: 10px;
    }

    button {
      background-color: #4CAF50;
      /* Green */
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      background-color: #3e8e41;
      /* Darker green */
    }
  </style>
  <div class="container">
    <h1>Đặt hàng thành công</h1>
    <p>Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi!</p>

    <p><strong>Thời gian giao hàng dự kiến:</strong> 2-3 ngày làm việc</p>
    <p><strong>Thông tin liên hệ:</strong></p>
    <ul>
      <li>Email: hotro@cuahang.com</li>
      <li>Số điện thoại: 19001234</li>
    </ul>

    <a href="?mod=shop&act=main">Tiếp tục mua sắm</a>

  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.4.16/sweetalert2.min.js"></script>
  <script>
    $(document).ready(function() {
      Swal.fire({
        title: "Đặt hàng thành công!",
        text: "Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi!",
        icon: "success",
        confirmButtonText: "OK"
      });
    });
  </script>
</body>

</html>