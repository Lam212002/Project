<?php

// session_start();
$sql_lietke_donhang = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($conn, $sql_lietke_donhang);

?>

<?php
get_header()
?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã đơn hàng</span></td>
                                    <td><span class="thead-text">Họ và tên khách hàng</span></td>
                                    <td><span class="thead-text">Địa chỉ</span></td>
                                    <td><span class="thead-text">email</span></td>
                                    <td><span class="thead-text">số điện thoại</span></td>
                                    <td><span class="thead-text">tình trạng</span></td>
                                    <td><span class="thead-text">ngày đặt</span></td>
                                    <td><span class="thead-text">quản lý đơn hàng</span></td>
                                    <td><span class="thead-text">In</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                while ($row = mysqli_fetch_array($query_lietke_dh)) {
                                    $i++;

                                ?>
                                    <tr>
                                        <td><span class="tbody-text"><?php echo $i ?></h3></span>
                                        <td><span class="tbody-text"><?php echo $row['code_cart'] ?></h3></span>
                                        <td>
                                            <div class="tb-title fl-left">
                                                <a href="" title=""><?php echo $row['tenkhachhang'] ?></a>
                                            </div>

                                        </td>
                                        <td><span class="tbody-text"><?php echo $row['diachi'] ?></span></td>
                                        <td><span class="tbody-text"><?php echo $row['emali'] ?></span></td>
                                        <td><span class="tbody-text"><?php echo $row['dienthoai'] ?></span></td>
                                        <td><span class="tbody-text">
                                                <?php
                                                if ($row['cart_status'] == 1) {
                                                    echo '<a class="editdh" href="?mod=order&act=xuly&code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
                                                } else {
                                                    echo '<p style="color:red;">Đang xử lý</p>';
                                                }

                                                ?>
                                            </span></td>

                                            <td><?php echo $row['cart_date'] ?></td>
                                        <td>
                                            <a href="?mod=order&act=xemdonhang&code=<?php echo $row['code_cart'] ?>" title="Sửa" class="edit">Xem đơn hàng</a>

                                        </td>
                                        <td>
                                            <a href="?mod=order&act=indonhang&code=<?php echo $row['code_cart'] ?>" title="Sửa" class="edit">In đơn hàng</a>
                                        </td>
                                    <?php
                                }
                                    ?>
                                    </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
               
            </div>
        </div>
    </div>
</div>