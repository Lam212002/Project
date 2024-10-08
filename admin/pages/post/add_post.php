
<?php
get_header()
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?mod=lib&act=add_post" enctype="multipart/form-data">
                        <label for="post_name">Tên sản bài viết</label>
                        <input type="text" name="post_name" id="post_name">

                        <label for="detail_post">Chi tiết bài viết</label>
                        <textarea name="detail_post" id="detail_post" class="ckeditor"></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="hinhanh" id="upload-thumb">
                        </div>
                         <label>Danh mục sản phẩm</label> 
                        <select name="danhmuc">
                            <option value="">-- Chọn danh mục --</option>
                            <?php
                            $sql_danhmuc="SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_baiviet DESC";
                            $query_danhmuc=mysqli_query($conn,$sql_danhmuc) ;
                            while($row=mysqli_fetch_array($query_danhmuc)){
                            ?>
                            <option value="<?php echo $row['id_baiviet']?>"><?php echo $row['tendanhmuc_baiviet']?></option>
                            <?php
                            }
                            ?>
                        </select> 
                        <label>Trạng thái</label>
                        <select name="status_post">
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