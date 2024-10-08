<?php
$sql_sua_baiviet = "SELECT * FROM tbl_post WHERE id_post='$_GET[id]' LIMIT 1";
$query_sua_baiviet = mysqli_query($conn, $sql_sua_baiviet)

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
                    <h3 id="index" class="fl-left">Sửa bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">

                    <?php
                    while ($row = mysqli_fetch_array($query_sua_baiviet)) {

                    ?>
                        <form method="POST" action="?mod=lib&act=edit_post&id=<?php echo $row['id_post'] ?>" enctype="multipart/form-data">
                            <label for="post_name">Tên bài viết</label>
                            <input type="text" name="post_name" value="<?php echo $row['post_name'] ?>" id="post-name">
                            <label for="detail_post">Chi tiết</label>
                            <textarea name="detail_post" id="detail_post" class="ckeditor"><?php echo $row['detail_post'] ?></textarea>
                            <label>Hình ảnh</label>
                            <div id="uploadFile">
                                <input type="file" name="hinhanh" id="upload-thumb">
                                <img src="./public/uploads_post/<?php echo $row['hinhanh'] ?>" style="width:60px" alt="">
                            </div>
                            <label>Danh mục sản phẩm</label> 
                            <select name="danhmuc">
                                <option value="">-- Chọn danh mục --</option>
                                <?php
                                $sql_danhmuc_baiviet = "SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_baiviet DESC";
                                $query_danhmuc_baiviet = mysqli_query($conn, $sql_danhmuc_baiviet);
                                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc_baiviet)) {
                                    if ($row_danhmuc['id_baiviet'] == $row['id_baiviet']) {
                                ?>
                                        <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
                                    <?php
                                    } else {
                                    ?>

                                        <option  value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
                                <?php
                                    }
                                }
                                ?>

                            </select>
                            <label>Trạng thái</label>
                            <select name="status_post">
                                <?php
                                if ($row['status_post'] == 1) {

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