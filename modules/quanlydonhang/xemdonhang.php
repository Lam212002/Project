<?php
session_start(); 
$code=$_GET['code'];
$sql_lietke_donhang = "SELECT * FROM tbl_cart_details,tbl_product WHERE tbl_cart_details.id_product=tbl_product.id_product AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($conn, $sql_lietke_donhang);
?>
<?php
get_header()
?>

<style>
    .ql-dh {
        margin-top: 22px;
        /* margin-left: 10px; */
    }

    .table {
        margin-top: 22px;
        /* margin-left: 10px; */

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
</style>

<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left ql-dh">Thông tin đơn hàng</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr class='table-dh'>
                                    <td><span class="thead-text">Id</span></td>
                                    <td><span class="thead-text">Mã đơn hàng</span></td>
                                    <td><span class="thead-text">Tên sản phẩm</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <td><span class="thead-text">Size</span></td>

                                    <td><span class="thead-text">Đơn giá</span></td>
                                    <td><span class="thead-text">Thành tiền</span></td>
                                    <!-- <td><span class="thead-text">Trạng thái</span></td> -->

                                </tr>
                            </thead>
                            <tbody>



                                <?php
                                $i = 0;
                                $tongtien=0;
                                while ($row = mysqli_fetch_array($query_lietke_dh)) {
                                    $i++;
                                    $thanhtien=$row['price']*$row['soluongmua'];
                                    $tongtien +=$thanhtien;
                                ?>
                                    <tr class='table-dh'>
                                        <td><span class="tbody-text"><?php echo $i ?></h3></span>
                                        <td class="clearfix">
                                            <div class="tb-title fl-left">
                                                <span href="" title=""><?php echo $row['code_cart'] ?></span>
                                            </div>
                                        </td>
                                        <td><span class="tbody-text"><?php echo $row['product_name'] ?></h3></span>

                                        <td><span class="tbody-text"><?php echo  $row['soluongmua'] ?></span></td>
                                        <td><span class="tbody-text"><?php echo  $row['size'] ?></span></td>

                                        <td><span class="tbody-text"><?php echo number_format( $row['price']) ?> VNĐ</span></td>
                                        <td><span class="tbody-text"><?php echo number_format( $row['price']*$row['soluongmua']) ?> VNĐ</span></td>


                                        

                                        <?php
                                }
                                ?>
                                    </tr>
                                </tbody>
                                <td><span class="tbody-text" style="font-weight:800;font-size:20px">Tổng Tiền: <?php echo number_format( $tongtien) ?></span></td>


                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>