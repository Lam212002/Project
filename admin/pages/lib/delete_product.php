<div class="main-content">
    <h1>Xóa sản phẩm</h1>
    <div id="content-box">
        <?php
        $error = false;
        $id=$_GET['id'];
        if (isset( $id) && !empty( $id)) {
            //   include '../connect_db.php';
            // unlink('./public/uploads/')
            $ssql="SELECT * FROM tbl_product WHERE id_product ='$id' LIMIT 1";
            $query=mysqli_query($conn,$ssql);
            while($row = mysqli_fetch_array($query)){
                unlink('./public/uploads/'.$row['hinhanh']);
            }
            $result = mysqli_query($conn, "DELETE FROM `tbl_product` WHERE `id_product` = " .  $id);
            if (!$result) {
                $error = "Không thể xóa sản phẩm.";
            }
            mysqli_close($conn);
            if ($error !== false) {
        ?>
                <div id="error-notify" class="box-content">
                    <h2>Thông báo</h2>
                    <h4><?= $error ?></h4>
                    
                </div>
            <?php } else { ?>
                    <?php  echo"<script> window.location.href='?mod=product&act=list_product'</script>"; ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>