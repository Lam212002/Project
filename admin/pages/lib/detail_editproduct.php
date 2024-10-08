<?php
$sql_sua_sanpham = "SELECT * FROM tbl_product WHERE id_product='$_GET[id]' LIMIT 1";
$query_sua_sanpham = mysqli_query($conn, $sql_sua_sanpham)

?>
<?php
get_header()
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">

                    <?php
                    while ($row = mysqli_fetch_array($query_sua_sanpham)) {


                    ?>

                        <form method="POST" action="?mod=lib&act=edit_product&id=<?php echo $row['id_product'] ?>" enctype="multipart/form-data">
                            <label for="product-name">Tên sản phẩm</label>
                            <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>" id="product-name">
                            <label for="product-code">Mã sản phẩm</label>
                            <input type="text" name="product_code" value="<?php echo $row['product_code'] ?>" id="product-code">
                            <label for="price">Giá sản phẩm</label>
                            <input type="text" name="price" value="<?php echo $row['price'] ?>" id="price">
                            <label for="price">Số lượng</label>
                            <input type="text" name="soluong" value="<?php echo $row['soluong'] ?>" id="soluong">
                            <label for="desc_product">Mô tả ngắn</label>
                            <textarea name="desc_product" id="desc_product"> <?php echo $row['desc_product'] ?></textarea>
                            <label for="detail_product">Chi tiết</label>
                            <textarea name="detail_product" id="detail_product" class="ckeditor"><?php echo $row['detail_product'] ?></textarea>
                            <label>Hình ảnh</label>
                            <div id="uploadFile">
                                <input type="file" name="hinhanh" id="upload-thumb">
                                <img src="./public/uploads/<?php echo $row['hinhanh'] ?>" style="width:60px" alt="">
                            </div>
                            <label>Danh mục sản phẩm</label> 
                            <select name="danhmuc">
                                <option value="">-- Chọn danh mục --</option>
                                <?php
                                $sql_danhmuc = "SELECT * FROM tbl_categry ORDER BY id_danhmuc DESC";
                                $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                    if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
                                ?>
                                        <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                                    <?php
                                    } else {
                                    ?>

                                        <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                                <?php
                                    }
                                }
                                ?>

                            </select>
                            <label>Trạng thái</label>
                            <select name="status_product">
                                <?php
                                if ($row['status_product'] == 1) {

                                ?>
                                    <option value="">-- Chọn danh mục --</option>
                                    <option value="0">Chờ duyệt</option>
                                    <option value="1" selected>Đã đăng</option>
                                <?php
                                } else {


                                ?>
                                    <option value="">-- Chọn danh mục --</option>
                                    <option value="0" selected>Chờ duyệt</option>
                                    <option value="1">Đã đăng</option>

                                <?php
                                }
                                ?>
                            </select>
                            <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>