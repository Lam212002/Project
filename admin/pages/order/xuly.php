<?php
use Carbon\Carbon;
use Carbon\CarbonInterval;
require ('carbon/autoload.php');
$now= Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
if(isset($_GET['code'])&&isset($_GET['code'])){
    $code_cart=$_GET['code'];
    $sql_update="UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code_cart."'";
    $sql=mysqli_query($conn,$sql_update);
    //thống kê doanh thu
    $sql_lietke_dh="SELECT * FROM tbl_cart_details,tbl_product WHERE tbl_cart_details.id_product=tbl_product.id_product AND tbl_cart_details.code_cart='$code_cart' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_lietke_dh=mysqli_query($conn,$sql_lietke_dh);


    $sql_thongke="SELECT * FROM tbl_thongke WHERE ngaydat='$now'";
    $query_thongke=mysqli_query($conn,$sql_thongke);
    $soluongmua=0;
    $doanhthu=0;

    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $soluongmua += $row['soluongmua'];
        $tongtien = $row['soluongmua'] * $row['price'];
        $doanhthu += $tongtien;
      }
    if(mysqli_num_rows($query_thongke)==0){
        $soluongban=$soluongmua;
        $doanhthu=$doanhthu;
        $donhang=1;
        $sql_update_thongke=mysqli_query($conn,"INSERT INTO tbl_thongke(ngaydat,soluongban,doanhthu,donhang)VALUE('$now','$soluongban','$doanhthu','$donhang')");

    }else if(mysqli_num_rows($query_thongke)!=0){
        while($row_tk=mysqli_fetch_array($query_thongke)){
            $soluongban=$row_tk['soluongban']+$soluongban;
            $doanhthu=$row_tk['doanhthu']+$doanhthu;
            $donhang=$row_tk['donhang']+1;
        $sql_update_thongke=mysqli_query($conn,"UPDATE tbl_thongke SET soluongban='$soluongban', doanhthu='$doanhthu', donhang='$donhang'WHERE ngaydat='$now'");
        }
    }


    echo "<script> window.location.href='?mod=order&act=list_order'</script>";
    
   
}

?>