<?php
$sql_sua_danhmucsp="SELECT * FROM tbl_categry WHERE id_danhmuc='$_GET[id]' LIMIT 1";
$query_sua_danhmucsp=mysqli_query($conn,$sql_sua_danhmucsp)

?>
<?php  get_header()?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
            <div id="content" class="fl-right">
                <div class="section" id="title-page">
                    <div class="clearfix">
                        <h3 id="index" class="fl-left">Sửa danh mục</h3>
                    </div>
                </div>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <form method="POST" action="?mod=lib&act=editcat&id=<?php echo $_GET['id'] ?>">
                            <?php
                            while($row = mysqli_fetch_array($query_sua_danhmucsp)){
                            ?>
                            <label for="title" >Tên danh mục</label>
                            <input type="text" value="<?php echo $row['tendanhmuc'] ?>" name="title" id="title">
                            <label for="title">Thứ Tự</label>
                            <input type="text" value="<?php echo $row['thutu'] ?>" name="order" id="title">
                            
                            <label for="desc">Mô tả</label>
                            <textarea name="desc" id="desc" class="ckeditor"> <?php echo $row['mota'] ?></textarea>
                            
                        
                            <button type="submit" name="btn-submit" id="btn-submit">sửa danh mục</button>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>