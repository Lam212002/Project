<div class="main-content">
    <h1>Xóa sản phẩm</h1>
    <div id="content-box">
        <?php
        $error = false;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            //   include '../connect_db.php';
            $result = mysqli_query($conn, "DELETE FROM `tbl_categry` WHERE `id_danhmuc` = " . $_GET['id']);
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
                    <?php  echo"<script> window.location.href='?mod=category&act=list_cat'</script>"; ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>