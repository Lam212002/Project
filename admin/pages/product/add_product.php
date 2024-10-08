
<?php
get_header()
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?mod=lib&act=add_product" enctype="multipart/form-data">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_name" id="product-name">
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product_code" id="product-code">
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price">
                        <label for="price">Số lượng</label>
                        <input type="text" name="soluong" id="soluong">
                        <label for="desc_product">Mô tả ngắn</label>
                        <textarea name="desc_product" id="desc_product"></textarea>
                        <label for="detail_product">Chi tiết</label>
                        <textarea name="detail_product" id="detail_product" class="ckeditor"></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="hinhanh" id="upload-thumb">
                        </div>
                         <label>Danh mục sản phẩm</label> 
                        <select name="danhmuc">
                            <option value="">-- Chọn danh mục --</option>
                            <?php
                            $sql_danhmuc="SELECT * FROM tbl_categry ORDER BY id_danhmuc DESC";
                            $query_danhmuc=mysqli_query($conn,$sql_danhmuc) ;
                            while($row=mysqli_fetch_array($query_danhmuc)){
                            ?>
                            <option value="<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></option>
                            <?php
                            }
                            ?>
                            
                        </select> 
                        <label>Trạng thái</label>
                        <select name="status_product">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="0">Chờ duyệt</option>
                            <option value="1">Đã đăng</option>
                        </select>
                        
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>