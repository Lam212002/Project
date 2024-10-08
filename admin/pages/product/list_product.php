
<?php
$list_product="SELECT * FROM tbl_product,tbl_categry WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc ORDER BY id_product DESC";
$row_list_product=mysqli_query($conn,$list_product);
?>
<?php
get_header()
?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách sản phẩm</h3>
                    <a href="?mod=product&act=add_product" title="" id="add-new" class="fl-left">Thêm mới</a>
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
                                    <td><span class="thead-text">Mã sản phẩm</span></td>
                                    <td><span class="thead-text">Tên sản phẩm</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text">Mô tả ngắn</span></td>
                                    <td><span class="thead-text">Chi tiết sản phẩm</span></td>
                                    <td><span class="thead-text">Giá</span></td>
                                    <td><span class="thead-text">Danh mục</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <!-- <td><span class="thead-text">Danh mục</span></td> -->
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Người tạo</span></td>
                                    <td><span class="thead-text">Sửa</span></td>
                                    <td><span class="thead-text">Xóa</span></td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                while($row= mysqli_fetch_array($row_list_product)){

                                    $i++;
                                
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $i ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $row['product_code'] ?></h3></span>
                                    <td class="clearfix">
                                        
                                        <span href="" title=""><?php echo $row['product_name'] ?></span>
                                        
                                        
                                    </td>
                                    <td>
                                        <div class="tbody-thumb">
                                            <img src="./public/uploads/<?php echo $row['hinhanh'] ?>" style="width:60px" alt="">
                                        </div>
                                    </td>
                                    <td><span class="tbody-text"><?php echo $row['desc_product'] ?></span></td>
                                    <td><span class="tbody-text"><?php echo $row['detail_product'] ?></span></td>
                                    <td><span class="tbody-text"><?php echo $row['price'] ?></span></td>
                                    <td><span class="tbody-text"><?php echo $row['tendanhmuc'] ?></span></td>\
                                    <td><span class="tbody-text"><?php echo $row['soluong'] ?></span></td>

                                    <!-- <td><span class="tbody-text">Thời trang nam</span></td> -->
                                    <td><span class="tbody-text"><?php if($row['status_product']==1){
                                            echo 'Hoạt động';
                                    }else{
                                            echo 'Chờ duyệt';
                                    }  ?></span></td>
                                    <td><span class="tbody-text">Admin</span></td>
                                    <td><a href="?mod=lib&act=detail_editproduct&id=<?php echo $row['id_product'] ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="?mod=lib&act=delete_product&id=<?php echo $row['id_product'] ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
