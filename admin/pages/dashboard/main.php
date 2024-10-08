<?php

require ('config/database.php');
require ('carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;


$now=Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql_lietke_donhang = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($conn, $sql_lietke_donhang);


// $query_date=mysqli_query($conn, $sql_lietke_donhang);
// $row=mysqli_fetch_array($query_date);

$sql_lietke_date = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_date = mysqli_query($conn, $sql_lietke_date);
$row_date=mysqli_fetch_array($query_lietke_date)

?>

<?php
get_header()
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

</head>

<body>

    <div id="main-content-wp" class="list-cat-page">
        <div class="wrap clearfix">
            <?php require 'inc/sidebar.php'; ?>
            <div id="content" class="fl-right">
                <div class="section" id="title-page">
                    <div class="clearfix">
                        <h3 id="index" class="fl-left">Tổng quan:</h3></br>
                    </div>
                    
                </div>
                <div class="section" id="title-page">
                    <div class="clearfix">
                    <h4 id="index" class="fl-left">Thống kê đơn hàng : <span id="text-date"></span></h4>
                    </div>
                    
                </div>
                <p>
                    <select class="select-date">
                        <option value="7ngay">7 ngày qua</option>
                        <option value="28ngay">28 ngày qua</option>
                        <option value="90ngay">90 ngày qua</option>
                        <option value="365ngay">365 ngày qua</option>
                    </select>
                </p>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <div class="table-responsive">
                            <div id="chart" style="height: 250px;"></div>
                        </div>
                    </div>
                </div>


                <div class="section" id="title-page">
                    <div class="clearfix">
                    <h4 id="index" class="fl-left">Thống kê doanh số hôm nay : <?php echo $now ?></h4>
                    <div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
      
        <div id="" class="">
            <div class="section" id="title-page">
               
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        
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
                                    <!-- <td><span class="thead-text">tình trạng</span></td> -->
                                    <td><span class="thead-text">ngày đặt</span></td>
                                    <td><span class="thead-text">quản lý đơn hàng</span></td>
                                    <td>
                                            <a href="?mod=order&act=intoanbodonhang" title="Sửa" class="edit">In toàn bộ đơn hàng</a>
                                        </td>
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
                                        <!-- <td><span class="tbody-text">
                                                <?php
                                                if ($row['cart_status'] == 1) {
                                                    echo '<a class="editdh" href="?mod=order&act=xuly&code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
                                                } else {
                                                    echo '<p style="color:red;">Đang xử lý</p>';
                                                }

                                                ?>
                                            </span></td> -->

                                            <td><?php echo $row['cart_date'] ?></td>
                                        <td>
                                            <a href="?mod=order&act=xemdonhang&code=<?php echo $row['code_cart'] ?>" title="Sửa" class="edit">Xem đơn hàng</a>

                                        </td>
                                        <!-- <td>
                                            <a href="?mod=order&act=indonhang&code=<?php echo $row['code_cart'] ?>" title="Sửa" class="edit">In đơn hàng</a>
                                        </td> -->
                                              

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


<!-- end list_product -->
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        thongke();
       var char= new Morris.Area({
            
            element: 'chart',
            xkey: 'date',
           
            ykeys: ['date','order', 'sales', 'quantity'],
           
            labels: ['Năm','Đơn hàng','Doanh thu','Số lượng bán ra']
        });


        $('.select-date').change(function(){
        var thoigian = $(this).val();
        if(thoigian=='7ngay'){
            var text='7 ngày qua';
        }else if(thoigian=='28ngay'){
            var text='28 ngày qua';
        }else if(thoigian=='90ngay'){
            var text='90 ngày qua';
        }else if(thoigian=='365ngay'){
            var text='365 ngày qua';
        }

        $.ajax({
            url:"pages/lib/thongke.php",
            method:"POST",
            dataType:"JSON",
            data:{thoigian:thoigian},
            success:function(data){
                char.setData(data);
                $('#text-date').text(text);
            }
        })
    });
        function thongke(){
            var text='365 ngày qua';
            $('#text-date').text(text);
            $.ajax({
                url:"pages/lib/thongke.php",
                method:"POST",
                dataType:"JSON",
                success:function(data)
                {
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        }
    })
    



      
    </script>
    <!-- <img src="../lib/thongke.php" alt=""> -->
</body>

</html>