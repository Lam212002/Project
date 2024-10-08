<?php
$post_name = $_POST['post_name'];
$id_danhmuc=$_POST['danhmuc'];
$detail_post = $_POST['detail_post'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$status_post = $_POST['status_post'];
?>
<div class="main-content">
    <h1>sửa sản phẩm</h1>
    <div id="content-box">
        <?php
        $error = false;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            //   include '../connect_db.php';
            if ($hinhanh!= '') {
                move_uploaded_file($hinhanh_tmp, './public/uploads_post/' . $hinhanh);
                $ssql="SELECT * FROM tbl_post WHERE id_post ='$_GET[id]' LIMIT 1";
                $query=mysqli_query($conn,$ssql);
                while($row = mysqli_fetch_array($query)){
                    unlink('./public/uploads_post/'.$row['hinhanh']);
                }
                $result = mysqli_query($conn, "UPDATE tbl_post SET post_name='" . $post_name . "',id_danhmuc='" . $id_danhmuc . "',detail_post='" . $detail_post . "'
                ,hinhanh='" . $hinhanh . "',status_post='" . $status_post . "'WHERE id_post='$_GET[id]'");

                // //xoa hinh anh
                // $ssql="SELECT * FROM tbl_product WHERE id_product ='$_GET[id]' LIMIT 1";
                // $query=mysqli_query($conn,$ssql);
                // while($row = mysqli_fetch_array($query)){
                //     unlink('./public/uploads/'.$row['hinhanh']);
                // }
            } else {

                $result = mysqli_query($conn, "UPDATE tbl_post SET post_name='" . $post_name . "',id_danhmuc='" . $id_danhmuc . "',detail_post='" . $detail_post . "'
                ,status_post='" . $status_post . "'WHERE id_post='$_GET[id]'");

            }
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
                <?php echo "<script> window.location.href='?mod=post&act=list_post'</script>"; ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>