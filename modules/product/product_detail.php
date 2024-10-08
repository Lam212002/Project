<?php
$sql_chitiet = "SELECT * FROM tbl_product,tbl_categry WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc AND tbl_product.id_product='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($conn, $sql_chitiet);


?>



<style>
    /* CSS cho trang sản phẩm */
    body {
        background-color: #ffffff;
        color: #333333;
        font-family: Arial, sans-serif;
    }

    h2 {
        font-family: "Roboto", sans-serif;
        color: #000000;
    }

    .container {
        max-width: 960px;
    }

    .row {
        margin-top: 30px;
        margin-left: -15px;
        margin-right: -15px;
        margin-bottom: 50px;
    }

    .col-md-6 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .img-fluid {
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn-primary:hover {
        background-color: #000000;
        color: #ffffff;
    }


    .btn-primary {
        background-color: #000000;
        color: #ffffff;
    }

    .click p input:hover {
        transition: all 1s;
        background: green;
    }
</style>
<script>
    // Thêm JavaScript vào trang web của bạn

    // Ví dụ: thêm chức năng cho tab

    const tabLinks = document.querySelectorAll(".nav-link");
    const tabPanes = document.querySelectorAll(".tab-pane");

    for (let i = 0; i < tabLinks.length; i++) {
        tabLinks[i].addEventListener("click", function(event) {
            event.preventDefault();

            // Xóa lớp active khỏi tất cả tab links và tab panes
            for (let j = 0; j < tabLinks.length; j++) {
                tabLinks[j].classList.remove("active");
                tabPanes[j].classList.remove("active");
            }

            // Thêm lớp active vào tab link hiện tại và tab pane tương ứng
            this.classList.add("active");
            document.getElementById(this.getAttribute("href")).classList.add("active");
        });
    }
</script>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evYQh+pC9rL4hbISq3S9vZ57W1j43DAPt256P5k70m4x419Z+4FBQX3lF4T3C5" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="./public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./public/css/style.css" type="text/css">
</head>

<body>
    <?php
    get_header();
    // get_nav()
    ?>
    <main>
        <div class="container">
            <div class="row">
                <?php
                while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {

                ?>
                    <div class="col-md-6">
                        <img src="././admin/public/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="Hình ảnh sản phẩm" class="img-fluid" style="width:425px;">
                    </div>
                    <div class="col-md-6">
                        <form method="POST" action="?mod=cats&act=add_product&id=<?php echo $row_chitiet['id_product'] ?>">
                            <h2><?php echo $row_chitiet['product_name'] ?></h2>
                            <p>Code: <b><?php echo $row_chitiet['product_code'] ?></b> </p>
                            <p>Giá: <b><?php echo number_format($row_chitiet['price'], 0, ',', '.') . 'VND' ?></b></p>
                            <p>Số lượng: <b><?php echo $row_chitiet['soluong'] ?></b></p>
                            <select name="size" style="font-size:12px;width:150px;text-align:center">
                                <option value="">-- Chọn Size --</option>
                                <?php
                                $sql_danhmuc = "SELECT * FROM tbl_size ORDER BY id_size DESC";
                                $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                                while ($row = mysqli_fetch_array($query_danhmuc)) {
                                ?>
                                    <option value="<?php echo $row['name_size'] ?>"><?php echo $row['name_size'] ?></option>
                                <?php
                                }
                                ?>

                            </select>
                            <!-- <input type="number"style="max-width:50px;" value="1" min="1" class="form-control"> -->
                            <br>
                            <div class="click">
                                <p><input name="themsanpham" type="submit" value="Thêm vào giỏ hàng" class="btn btn-primary" style="font-size:15px;margin-top:10px"></p>
                            </div>
                            <p><?php echo $row_chitiet['desc_product'] ?></p>
                    </div>
                    <br><br>
                    </form>
            </div>
            <br>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page">
                        <h5>THÔNG TIN SẢN PHẨM</h5>
                    </a>
                </li>

            </ul>
            <br>
            <div class="tab-content">
                <div class="tab-pane active" id="thong-tin-san-pham">
                    <p><?php echo $row_chitiet['detail_product'] ?></p>
                </div>

            </div>
        <?php
                }
        ?>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <h5>CHÍNH SÁCH ĐỔI TRẢ, HOÀN TIỀN</h5>
                </a>
            </li>

        </ul>


        <div>
            <p>Chính sách đổi trả, hoàn tiền tại shop quần áo [ISHOP]</br>
                1. Điều kiện áp dụng:

                Khách hàng được đổi trả sản phẩm trong vòng [số ngày] ngày kể từ ngày nhận hàng.
                Sản phẩm phải còn nguyên tem mác, chưa qua sử dụng, giặt ủi hoặc chỉnh sửa.
                Sản phẩm không bị bẩn, rách, nhăn nhúm hoặc hư hỏng do lỗi của khách hàng.
                Khách hàng phải có hóa đơn mua hàng hoặc phiếu đổi trả hàng.</br>
                2. Trường hợp được đổi trả:

                Sản phẩm không đúng với mô tả trên website hoặc trong hóa đơn.
                Sản phẩm bị lỗi do nhà sản xuất.
                Sản phẩm không vừa size hoặc không phù hợp với khách hàng.</br>
                3. Trường hợp không được đổi trả:

                Sản phẩm đã qua sử dụng, giặt ủi hoặc chỉnh sửa.
                Sản phẩm bị bẩn, rách, nhăn nhúm hoặc hư hỏng do lỗi của khách hàng.
                Khách hàng không có hóa đơn mua hàng hoặc phiếu đổi trả hàng.
                Sản phẩm đã được giảm giá hoặc khuyến mãi.</br>
                4. Cách thức đổi trả:

                Khách hàng có thể đổi trả sản phẩm trực tiếp tại cửa hàng hoặc qua đường bưu điện.
                Nếu đổi trả trực tiếp tại cửa hàng, khách hàng vui lòng mang theo sản phẩm, hóa đơn mua hàng và phiếu đổi trả hàng (nếu có).
                Nếu đổi trả qua đường bưu điện, khách hàng vui lòng gửi sản phẩm, hóa đơn mua hàng và phiếu đổi trả hàng về địa chỉ của shop.</br>
                5. Hoàn tiền:

                Trong trường hợp khách hàng muốn hoàn tiền, shop sẽ hoàn lại tiền cho khách hàng trong vòng [số ngày] ngày kể từ ngày nhận được sản phẩm đổi trả.
                Tiền sẽ được hoàn lại vào tài khoản ngân hàng hoặc thẻ thanh toán mà khách hàng đã sử dụng để thanh toán cho sản phẩm.</br>
                6. Lưu ý:

                Shop có quyền từ chối đổi trả sản phẩm nếu không đáp ứng các điều kiện trên.
                Chi phí vận chuyển cho việc đổi trả sản phẩm do khách hàng chịu trách nhiệm.</br>
                7. Mọi thông tin chi tiết vui lòng liên hệ:

                Hotline:1234567890
                Email: vivanA@gmail.com
                Website: ISHOP.com
                8. Xin trân trọng cảm ơn!</p>
        </div>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <h5>THÔNG TIN GIAO HÀNG</h5>
                </a>
            </li>
        </ul>

        <div>
            <p>THÔNG TIN GIAO HÀNG
                Chào mừng bạn đến với ISHOP!</br>

                Dưới đây là thông tin giao hàng của shop:</br>

                1. Hình thức giao hàng:

                Giao hàng tận nơi: Shop giao hàng tận nơi trên toàn quốc thông qua các dịch vụ chuyển phát nhanh uy tín như [Tên dịch vụ 1], [Tên dịch vụ 2], [Tên dịch vụ 3].
                Giao hàng tiết kiệm: Shop có hỗ trợ dịch vụ giao hàng tiết kiệm cho các đơn hàng có giá trị từ [Số tiền] trở lên.</br>
                2. Phí giao hàng:

                Phí giao hàng được tính dựa trên trọng lượng, kích thước của sản phẩm và địa điểm giao hàng.
                Shop có hỗ trợ miễn phí giao hàng cho các đơn hàng có giá trị từ [Số tiền] trở lên.</br>
                3. Thời gian giao hàng:

                Thời gian giao hàng thường từ 2-5 ngày làm việc, tùy thuộc vào địa điểm giao hàng.
                Shop sẽ liên hệ với bạn để xác nhận thông tin giao hàng trước khi gửi hàng.</br>
                4. Hướng dẫn đặt hàng:

                Bạn có thể đặt hàng trực tiếp trên website của shop tại https://www.website.com/ hoặc qua fanpage [Tên fanpage].
                Khi đặt hàng, bạn cần cung cấp đầy đủ thông tin giao hàng bao gồm: tên, số điện thoại, địa chỉ nhận hàng.</br>
                5. Quy định đổi trả hàng:

                Shop hỗ trợ đổi trả hàng trong vòng [Số ngày] ngày kể từ ngày nhận hàng.
                Sản phẩm được đổi trả phải còn nguyên tem mác, chưa qua sử dụng.
                Chi phí đổi trả hàng do khách hàng chịu trách nhiệm.</p>
        </div>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/NK爪/1rZX3rGWN7I1tHHn0Ysqq37rY71zGcub" crossorigin="anonymous"></script>
    <script src="./public/js/jquery-3.3.1.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery-ui.min.js"></script>
    <script src="./public/js/jquery.countdown.min.js"></script>
    <script src="./public/js/jquery.nice-select.min.js"></script>
    <script src="./public/js/jquery.zoom.min.js"></script>
    <script src="./public/js/jquery.dd.min.js"></script>
    <script src="./public/js/jquery.slicknav.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/main.js"></script>

    <?php
    get_footer()
    ?>
</body>

</html>