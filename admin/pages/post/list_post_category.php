<?php
$list_category="SELECT * FROM tbl_danhmuc_baiviet ORDER BY thutu DESC";
$row_list_category=mysqli_query($conn,$list_category);
?>
<?php
get_header()
?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách danh mục bài viết</h3>
                    <a href="?mod=post&act=add_category" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Tên danh mục bài viết</span></td>
                                    <td><span class="thead-text">Thứ tự bài viết</span></td>
                                    <td><span class="thead-text">Sửa</span></td>
                                    <td><span class="thead-text">Xóa</span></td>
                                    <!-- <td><span class="thead-text">Trạng thái</span></td> -->
                                   
                                </tr>
                            </thead>
                            <tbody>
                               
                              
                                
                                    <?php
                                    $i=0;
                                    while($row=mysqli_fetch_array($row_list_category)){
                                        $i++;

                                    ?>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $i?></h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <a href="" title=""><?php echo $row['tendanhmuc_baiviet'] ?></a>
                                        </div>
                                    </td>                                    
                                    <td><span class="tbody-text"><?php echo $row['thutu'] ?></span></td>
                                    <td>  
                                            <a href="?mod=lib&act=edit_detail_category&id=<?php echo $row['id_baiviet'] ?>" title="Sửa" style="margin-right:10px;" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </td>
                                        <td>

                                            <a href="?mod=lib&act=delete_category&id=<?php echo $row['id_baiviet'] ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    <!-- <td><span class="tbody-text">Hoạt động</span></td> -->
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title=""><</a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>