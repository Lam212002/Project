
<?php
$list_post="SELECT * FROM tbl_post,tbl_danhmuc_baiviet WHERE tbl_post.id_danhmuc=tbl_danhmuc_baiviet.id_baiviet ORDER BY id_post DESC";
$row_list_post=mysqli_query($conn,$list_post);
?>
<?php
get_header()
?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách Bài viết</h3>
                    <a href="?mod=post&act=add_post" title="" id="add-new" class="fl-left">Thêm mới</a>
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
                                    <td><span class="thead-text">Tên bài viêt</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text">Chi tiết bài viết</span></td>
                                    <td><span class="thead-text">Danh mục bài viết</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Người tạo</span></td>
                                    <td><span class="thead-text">Sửa</span></td>
                                    <td><span class="thead-text">Xóa</span></td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                while($row= mysqli_fetch_array($row_list_post)){

                                    $i++;
                                
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $i ?></h3></span>
                                    <td class="clearfix">
                                        
                                        <span href="" title=""><?php echo $row['post_name'] ?></span>
                                        
                                        
                                    </td>
                                    <td>
                                        <div class="tbody-thumb">
                                            <img src="./public/uploads_post/<?php echo $row['hinhanh'] ?>" style="width:60px" alt="">
                                        </div>
                                    </td>
                                    <td><span class="tbody-text"><?php echo $row['detail_post'] ?></span></td>
                                    <td><span class="tbody-text"><?php echo $row['tendanhmuc_baiviet'] ?></span></td>
                                    <!-- <td><span class="tbody-text">Thời trang nam</span></td> -->
                                    <td><span class="tbody-text"><?php if($row['status_post']==1){
                                            echo 'Đã đăng';
                                    }else{
                                            echo 'Chờ duyệt';
                                    }  ?></span></td>
                                    <td><span class="tbody-text">Admin</span></td>
                                    <td><a href="?mod=lib&act=edit_post_detail&id=<?php echo $row['id_post'] ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="?mod=lib&act=delete_post&id=<?php echo $row['id_post'] ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                                
                               <?php
                                }
                               ?>
                                
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="tfoot-text">STT</span></td>
                                    <td><span class="tfoot-text">Mã sản phẩm</span></td>
                                    <td><span class="tfoot-text">Hình ảnh</span></td>
                                    <td><span class="tfoot-text">Tên sản phẩm</span></td>
                                    <td><span class="tfoot-text">Giá</span></td>
                                    <td><span class="tfoot-text">Danh mục</span></td>
                                    <td><span class="tfoot-text">Trạng thái</span></td>
                                    <td><span class="tfoot-text">Người tạo</span></td>
                                    <td><span class="tfoot-text">Thời gian</span></td>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="section" id="paging-wp">
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
            </div> -->
        </div>
    </div>
</div>
