<?php
$tenloaisp=$_POST['title'];
$thutu=$_POST['order'];
$mota=$_POST['desc']
?>
<div class="main-content">
    <h1>sửa sản phẩm</h1>
    <div id="content-box">
        <?php
        $error = false;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            //   include '../connect_db.php';
            $result = mysqli_query($conn, "UPDATE tbl_categry SET tendanhmuc='$tenloaisp',thutu='.$thutu.',mota='$mota'WHERE id_danhmuc='$_GET[id]' " );
            if (!$result) {
                $error = "Không thể sửa sản phẩm.";
            }
            mysqli_close($conn);
            if ($error !== false) {
        ?>
                <div id="error-notify" class="box-content">
                    <h2>Thông báo</h2>
                    <h4><?= $error ?></h4>
                    
                </div>
            <?php } else { ?>
                    <?php  echo"<script> window.location.href='?mod=category&act=list_cat'</script>"; ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>