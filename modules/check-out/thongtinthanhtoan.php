<?php
session_start();

// echo $_SESSION['id_khachhang']
?>
<?php
// if(isset($_SESSION['cart'])){
//     print_r($_SESSION['cart']);
// }

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="codelean Template">
  <meta name="keywords" content="codelean, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CodeLean | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../public/css/themify-icons.css" type="text/css">
  <link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="../public/css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="../public/css/style.css" type="text/css">
  <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNx12dtTyhF78xXNXdkwX1CZeRusQFRKp+tA7hAShOK/B/FQ2" crossorigin="anonymous"></script>

  <script src="https://www.paypal.com/sdk/js?client-id=AfDZQSZ2EeDHlSJTME64Y_FYQ34c6WOZa4wwCqQUZ-M_KXPg1fkLzl_3r52Aad__vv4br6DOFn7_Lc-I&currency=USD"></script>
</head>

<body>


  <script>
    paypal.Buttons({

      // Cài đặt giao dịch khi nhấp vào nút thanh toán
      createOrder: function(data, actions) {
        var tongtien = document.getElementById('tongtien').value;
        return actions.order.create({

          purchase_units: [{
            amount: {

              // Giá trị có thể tham chiếu biến hoặc hàm. Ví dụ: 'value: document.getElementById("...").value'
              value: tongtien
            }
          }]

        });
      },

      // Hoàn tất giao dịch sau khi người thanh toán chấp thuận
      onApprove: function(data, actions) {

        return actions.order.capture().then(function(orderData) {
          // Giao dịch thành công! Cho mục đích dev/demo:

          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          var transaction = orderData.purchase_units[0].payments.captures[0];

          alert('Giao dịch ' + transaction.status + ' ' + transaction.id + '\n\nXem bảng điều khiển để biết tất cả các chi tiết có sẵn');
          window.location.replace('http://localhost/home%20page/%C4%90%E1%BB%93%20%C3%A1n%20chuy%C3%AAn%20ng%C3%A0nh%20PHP%20thu%E1%BA%A7n/?mod=thanhk&act=main&thanhtoan=paypal');
          // Khi đã sẵn sàng để hoạt động, hãy xóa cảnh báo và hiển thị thông báo thành công trong trang này. Ví dụ:
          // var element = document.getElementById('paypal-button-container');

          // element.innerHTML = "";
          // element.innerHTML = "<h3>Cảm ơn bạn đã thanh toán!</h3>";

          // Hoặc chuyển đến một URL khác: actions.redirect(thank_you.html);
        });
      },
      oncancel: function(data) {
        window.location.replace('http://localhost/home%20page/%c4%90%e1%bb%93%20%c3%a1n%20chuy%c3%aan%20ng%c3%a0nh%20PHP%20thu%e1%ba%a7n/?mod=check-out&act=thongtinthanhtoan');
      }
    }).render('#paypal-button-container');
  </script>

  <style>
    .deleteproduct {
      color: black;
    }

    .deleteproduct:hover {
      color: red;
    }


    /* thanh thanh toan */
    /* jQuery Demo */

    .clearfix:after {
      clear: both;
      content: "";
      display: block;
      height: 0;
    }

    /* Responsive Arrow Progress Bar */

    .container {
      font-family: 'Lato', sans-serif;
    }

    .arrow-steps .step {
      font-size: 14px;
      text-align: center;
      color: #777;
      cursor: default;
      margin: 0 1px 0 0;
      padding: 10px 0px 10px 0px;
      width: 15%;
      float: left;
      position: relative;
      background-color: #ddd;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .arrow-steps .step a {
      color: #777;
      text-decoration: none;
    }

    .arrow-steps .step:after,
    .arrow-steps .step:before {
      content: "";
      position: absolute;
      top: 0;
      right: -17px;
      width: 0;
      height: 0;
      border-top: 19px solid transparent;
      border-bottom: 17px solid transparent;
      border-left: 17px solid #ddd;
      z-index: 2;
    }

    .arrow-steps .step:before {
      right: auto;
      left: 0;
      border-left: 17px solid #fff;
      z-index: 0;
    }

    .arrow-steps .step:first-child:before {
      border: none;
    }

    .arrow-steps .step:last-child:after {
      border: none;
    }

    .arrow-steps .step:first-child {
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px;
    }

    .arrow-steps .step:last-child {
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
    }

    .arrow-steps .step span {
      position: relative;
    }

    *.arrow-steps .step.done span:before {
      opacity: 1;
      content: "";
      position: absolute;
      top: -2px;
      left: -10px;
      font-size: 11px;
      line-height: 21px;
    }

    .arrow-steps .step.current {
      color: #fff;
      background-color: #5599e5;
    }

    .arrow-steps .step.current a {
      color: #fff;
      text-decoration: none;
    }

    .arrow-steps .step.current:after {
      border-left: 17px solid #5599e5;
    }

    .arrow-steps .step.done {
      color: #173352;
      background-color: #2f69aa;
    }

    .arrow-steps .step.done a {
      color: #173352;
      text-decoration: none;
    }

    .arrow-steps .step.done:after {
      border-left: 17px solid #2f69aa;
    }
  </style>
  <!-- Start coding here -->

  <?php get_header() ?>
  <!-- 
    <div id="preloder">
        <div class="loader"></div>
    </div> -->



  <!-- Breadcrumb section Begin? -->
  <div class="breacrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <a href="?"><i class="fa fa-home"></i>Home</a>
            <a href="?mod=shop&act=main">Shop</a>
            <span>Giỏ Hàng</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Breadcrumb section end -->

  <!-- code giỏ hàng start -->
  <div class="shopping-cart spad">
    <div class="container">

      <div class="container">
        <!-- Responsive Arrow Progress Bar -->
        <div class="arrow-steps clearfix" style="margin-left:-15px">
          <div class="step done"> <span> <a href="?mod=shopping_cart&act=">Giỏ hàng</a></span> </div>
          <div class="step done"> <span><a href="?mod=check-out&act=vanchuyen">Vận chuyển đơn hàng</a></span> </div>
          <div class="step current"> <span><a href="?mod=check-out&act=thongtinthanhtoan">Thanh toán</a><span> </div>
          <div class="step "> <span><a href="?mod=check-out&act=donhangdadat">Lịch sử đơn hàng</a><span> </div>
        </div>
        <!-- end Responsive Arrow Progress Bar -->
        <!-- <div class="nav clearfix">
                                        <a href="#" class="prev">Previous</a> |
                                        <a href="#" class="next pull-right">Next</a>
                                    </div> -->
      </div>
      <form action="?mod=check-out&act=xulythanhtoan" method="POST">

        <div class="row">



          <?php
          $id_dangky = $_SESSION['id_khachhang'];
          $sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
          $count = mysqli_num_rows($sql_get_vanchuyen);
          if ($count > 0) {
            $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
            $name = $row_get_vanchuyen['name'];
            $phone = $row_get_vanchuyen['phone'];
            $address = $row_get_vanchuyen['address'];
            $note = $row_get_vanchuyen['note'];
          } else {
            $name = '';
            $phone = '';
            $address = '';
            $note = '';
          }
          ?>
          <div class="col-lg-8">
            <div class="cart-table">
              <p>Thông tin vận chuyển và giỏ hàng:</p>
              <ul>
                <li style="font-size:14px">Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
                <li style="font-size:14px">Số điện thoại : <b><?php echo $phone ?></b></li>
                <li style="font-size:14px">Địa chỉ : <b><?php echo $address ?></b></li>
                <li style="font-size:14px">Ghi chú : <b><?php echo $note ?></b></li>
              </ul>
            </div>
            <div class="shopping-cart spad">
              <div class="container">

              </div>
              <?php
              if (isset($_POST['themvanchuyen'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $id_dangky = $_SESSION['id_khachhang'];

                $sql__them_vanchuyen = mysqli_query($conn, "INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");

                if ($sql__them_vanchuyen) {
                  echo '<script>alert("thêm vận chuyển thành công")</script>';
                }
              } else if (isset($_POST['capnhatvanchuyen'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $id_dangky = $_SESSION['id_khachhang'];

                $sql_update_vanchuyen = mysqli_query($conn, "UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky' ");

                if ($sql_update_vanchuyen) {
                  echo '<script>alert("cập nhật vận chuyển thành công")</script>';
                }
              }
              ?>
              <div class="row">
                <?php
                $id_dangky = $_SESSION['id_khachhang'];
                $sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
                $count = mysqli_num_rows($sql_get_vanchuyen);
                if ($count > 0) {
                  $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
                  $name = $row_get_vanchuyen['name'];
                  $phone = $row_get_vanchuyen['phone'];
                  $address = $row_get_vanchuyen['address'];
                  $note = $row_get_vanchuyen['note'];
                } else {
                  $name = '';
                  $phone = '';
                  $address = '';
                  $note = '';
                }
                ?>




                <div class="cart-table">
                  <table>
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Mã Sản phẩm</th>
                        <th class="p-name">Tên Sản phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Số lượng</th>
                        <th>Size</th>
                        <th>giá sản phẩm</th>
                        <th>Thành tiền</th>

                      </tr>
                    </thead>
                    <tbody>



                      <?php
                      if (isset($_SESSION['cart'])) {
                        $i = 0;
                        $tongtien = 0;
                        foreach ($_SESSION['cart'] as $cart_item) {
                          $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                          $tongtien = $tongtien + $thanhtien;
                          $i++;
                      ?>
                          <tr>
                            <td class="cart-title first-row">
                              <p style="text-align:center"><?php echo $i ?></p>
                            </td>
                            <td class="p-price first-row"><?php echo $cart_item['masp'] ?></td>
                            <td class="qua-col first-row">
                              <p><?php echo $cart_item['product_name'] ?></p>
                            </td>
                            <td class="cart-pic first-row"><img src="././admin/public/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>

                            <td class="total-price first-row">
                              <?php echo $cart_item['soluong'] ?>
                            </td>

                            <td class="total-price first-row"><?php echo $cart_item['size'] ?></td>
                            <td class="total-price first-row"><?php echo number_format($cart_item['giasp']) ?></td>
                            <td class="total-price first-row"><?php echo number_format($thanhtien) ?></td>
                          </tr>
                        <?php
                        }
                      } else {


                        ?>
                        <tr>
                          <td colspan="6">
                            <p>Hiện chưa có sản phẩm nào trong giỏ hàng</p>
                          </td>
                        </tr>

                      <?php
                      }
                      ?>

                    </tbody>

                  </table>
                </div>
                <div class="proceed-checkout">
                  <ul>
                    <?php
                    if (empty($tongtien)) {


                    ?>

                      <li class="cart-total">tổng <span>0 VND</span></li>
                    <?php
                    } else {


                    ?>

                      <li class="cart-total">tổng : <span><?php echo number_format($tongtien) ?>VND</span></li>
                    <?php
                    }
                    ?>
                  </ul>
                  <!-- <?php
                        if (isset($_SESSION['dangky'])) {

                        ?>

                    <a href="?mod=check-out&act=thongtinthanhtoan" name="thanhtoan" class="proceed-btn">Hình thức Thanh toán</a>

                  <?php
                        } else {
                  ?>
                    <a href="?mod=register&act=main" class="proceed-btn">Đăng ký để đặt hàng</a>

                  <?php
                        }
                  ?> -->

                </div>




              </div>
            </div>

          </div>




          <div class="col-lg-4">
            <h5 style="padding-bottom: 24px;">Phương thức thanh toán: </h5>

            <div class="form-check" style="padding:10px">
              <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="thanhtoankhinhanhang" checked>
              <label for="form-check-label" for="exampleRadios1" style="font-size:14px">
                Thanh toán khi nhận hàng
              </label>
            </div>
            <div class="form-check" style="padding:10px">
              <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="vnpay">
              <img src="././public/img/iconpayout/vnpay.jpg" height="32" width="32" alt="">
              <label for="form-check-label" for="exampleRadios4" style="font-size:14px">
                Thanh toán Vnpay
              </label>
            </div>
      </form>
    


      <p></p>


      <!-- thanh toan end -->

      <?php
      $tongtien = 0;
      foreach ($_SESSION['cart'] as $key => $value) {
        $thanhtien = $value['soluong'] * $value['giasp'];
        $tongtien = $tongtien + $thanhtien;
      }
      $tongtien_vnd = $tongtien;
      $tongtien = round($tongtien / 24819);
      ?>
      <input type="hidden" name="" value="<?php echo $tongtien ?>" id="tongtien">
      <div id="paypal-button-container"></div>

  <!-- thanh toan momo -->
      <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="?mod=check-out&act=xulythanhtoanmomo_atm">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO bằng thẻ ATM" class="btn btn-danger" style="font-size:15px;margin-bottom:10px">
      </form>
      <input type="submit" value="thanh toán ngay" name="redirect" style="font-size:18px" class="btn btn-danger">

    </div>
  </div>
  </div>
  </div>
  </div>



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