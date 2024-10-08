<?php
if(isset($_GET['code'])&&isset($_GET['code'])){
    $code_cart=$_GET['code'];
    $sql_update="UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code_cart."'";
    $sql=mysqli_query($conn,$sql_update);
    echo "<script> window.location.href='?mod=quanlydonhang&act=lietke'</script>";

}

?>