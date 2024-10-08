<?php
$sql_sua_danhmucbaiviet="SELECT * FROM tbl_danhmuc_baiviet WHERE id_baiviet='$_GET[id]' LIMIT 1";
$query_sua_danhmucbaiviet=mysqli_query($conn,$sql_sua_danhmucbaiviet)

?>
<?php  get_header()?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
            <div id="content" class="fl-right">
                <div class="section" id="title-page">
                    <div class="clearfix">
                        <h3 id="index" class="fl-left">Sửa danh mục bài viết</h3>
                    </div>
                </div>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <form method="POST" action="?mod=lib&act=edit_category&id=<?php echo $_GET['id'] ?>">
                            <?php
                            while($row = mysqli_fetch_array($query_sua_danhmucbaiviet)){
                            ?>
                            <label for="title" >Tên danh mục</label>
                            <input type="text" value="<?php echo $row['tendanhmuc_baiviet'] ?>" name="title" id="title">
                            <label for="title">Thứ Tự</label>
                            <input type="text" value="<?php echo $row['thutu'] ?>" name="order" id="title">
                            
                           
                            <button type="submit" name="btn-submit" id="btn-submit">sửa danh mục bài viết</button>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>