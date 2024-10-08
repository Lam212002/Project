<?php
$sql_lh="SELECT * FROM tbl_lienhe WHERE id=1";
$query_lh=mysqli_query($conn,$sql_lh);
?>
<?php
get_header()
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
               
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                        <?php
                        while($row_lienhe=mysqli_fetch_array($query_lh)){
                        ?>
                    <form method="POST" action="?mod=quanlylienhe&act=xuly&id=<?php echo $row_lienhe['id']?>" enctype="multipart/form-data">
                        <td>Thông tin liên hệ</td>
                        <textarea name="thongtinlienhe" id="detail_product" class="ckeditor"><?php echo $row_lienhe['thongtinlienhe'] ?></textarea>
                        
                        
                        
                        <button type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
                        
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>