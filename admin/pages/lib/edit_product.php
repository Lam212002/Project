<?php
$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$price = $_POST['price'];
$id_danhmuc=$_POST['danhmuc'];
$soluong = $_POST['soluong'];
$desc_product = $_POST['desc_product'];
$detail_product = $_POST['detail_product'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$status_product = $_POST['status_product'];
?>
<div class="main-content">
    <h1>sửa sản phẩm</h1>
    <div id="content-box">
        <?php
        $error = false;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            //   include '../connect_db.php';
            if ($hinhanh!= '') {
                move_uploaded_file($hinhanh_tmp, './public/uploads/' . $hinhanh);
                $ssql="SELECT * FROM tbl_product WHERE id_product ='$_GET[id]' LIMIT 1";
                $query=mysqli_query($conn,$ssql);
                while($row = mysqli_fetch_array($query)){
                    unlink('./public/uploads/'.$row['hinhanh']);
                }
                $result = mysqli_query($conn, "UPDATE tbl_product SET product_name='" . $product_name . "',product_code='" . $product_code . "'
                ,price='" . $price . "',id_danhmuc='" . $id_danhmuc . "',soluong='" . $soluong . "',desc_product='" . $desc_product . "',detail_product='" . $detail_product . "'
                ,hinhanh='" . $hinhanh . "',status_product='" . $status_product . "'WHERE id_product='$_GET[id]'");

                // //xoa hinh anh
                // $ssql="SELECT * FROM tbl_product WHERE id_product ='$_GET[id]' LIMIT 1";
                // $query=mysqli_query($conn,$ssql);
                // while($row = mysqli_fetch_array($query)){
                //     unlink('./public/uploads/'.$row['hinhanh']);
                // }
            } else {

                $result = mysqli_query($conn, "UPDATE tbl_product SET product_name='" . $product_name . "',product_code='" . $product_code . "'
                ,price='" . $price . "',id_danhmuc='" . $id_danhmuc . "',soluong='" . $soluong . "',desc_product='" . $desc_product . "'
                ,detail_product='" . $detail_product . "',status_product='" . $status_product . "'WHERE id_product='$_GET[id]'");
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
                <?php echo "<script> window.location.href='?mod=product&act=list_product'</script>"; ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>