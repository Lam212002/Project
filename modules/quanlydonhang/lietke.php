<?php
session_start();
$sql_lietke_donhang = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($conn, $sql_lietke_donhang);
?>
<?php
get_header()
?>

<style>
    .ql-dh {
        margin-top: 22px;
    }

    .table {
        margin-top: 22px;
    }

    .table-dh td {
        padding: 30px;
        font-size: 13px;

    }

    .edit {
        color: black;
    }

    .edit:hover {
        color: green;
    }

    .editpr {
        color: black;
    }

    .editdh:hover {
        color: green;
    }
</style>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left ql-dh">Quản lý đơn hàng</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section" id="detail-page">
                        <div class="section-detail">
                            <div class="table-responsive">
                                <table class="table list-table-wp">
                                    <thead>
                                        <tr class='table-dh'>
                                            <td><span class="thead-text">Id</span></td>
                                            <td><span class="thead-text">Mã đơn hàng</span></td>
                                            <td><span class="thead-text">Tên khách hàng</span></td>
                                            <td><span class="thead-text">Địa chỉ</span></td>
                                            <td><span class="thead-text">Ngày đặt</span></td>
                                            <td><span class="thead-text">Email</span></td>
                                            <td><span class="thead-text">Số điện thoại</span></td>
                                            <td><span class="thead-text">Hình thức thanh toán</span></td>
                                            <td><span class="thead-text">Tình trạng</span></td>
                                            <td><span class="thead-text">quản lý đơn hàng</span></td>
                                            <!-- <td><span class="thead-text">Trạng thái</span></td> -->

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        if (isset($_SESSION['id_khachhang'])) {
                                        ?>

                                            <?php
                                            $i = 0;
                                            while ($row = mysqli_fetch_array($query_lietke_dh)) {
                                                $i++;

                                            ?>
                                                <tr class='table-dh'>
                                                    <td><span class="tbody-text"><?php echo $i ?></h3></span>
                                                    <td class="clearfix">
                                                        <div class="tb-title fl-left">
                                                            <span href="" title=""><?php echo $row['code_cart'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td><span class="tbody-text"><?php echo $row['tenkhachhang'] ?></h3></span>

                                                    <td><span class="tbody-text"><?php echo $row['diachi'] ?></span></td>
                                                    <td><span class="tbody-text"><?php echo $row['cart_date'] ?></span></td>
                                                    <td><span class="tbody-text"><?php echo $row['emali'] ?></span></td>
                                                    <td><span class="tbody-text"><?php echo $row['dienthoai'] ?></span></td>
                                                    <td><span class="tbody-text"><?php echo $row['cart_payment'] ?></span></td>
                                                    <td><span class="tbody-text">
                                                            <?php
                                                            if ($row['cart_status'] == 1) {
                                                                echo '<p>Đơn hàng mới</p>';
                                                            } else {
                                                                echo '<p style="color:red;">Đang xử lý</p>';
                                                            }

                                                            ?>
                                                        </span></td>

                                                    <td>
                                                        <a href="?mod=quanlydonhang&act=xemdonhang&code=<?php echo $row['code_cart'] ?>" title="Sửa" class="edit">Xem đơn hàng</a>
                                                    </td>

                                                    <!-- <td><span class="tbody-text">Hoạt động</span></td> -->
                                                <?php
                                            }
                                                ?>
                                                </tr>
                                            <?php
                                        }
                                            ?>



                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>