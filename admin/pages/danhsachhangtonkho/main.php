
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
                    <h3 id="index" class="fl-left">Danh sách Hàng tồn kho</h3>
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
                        
                                    <td><span class="thead-text">Giá</span></td>
                                    <td><span class="thead-text">Danh mục</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <td><span class="thead-text">Tồn kho</span></td>

                                    

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
                            
                                    <td><span class="tbody-text"><?php echo $row['price'] ?></span></td>
                                    <td><span class="tbody-text"><?php echo $row['tendanhmuc'] ?></span></td>\
                                    <td><span class="tbody-text"><?php echo $row['soluong'] ?></span></td>
                                    <td><span class="tbody-text"><?php  
                                    if($row['soluong'] >=1){
                                        echo '<p style="color:green;">Còn hàng</p>';
                                    }elseif($row['soluong'] <= 0){
                                        echo '<p style="color:red;">Hết hàng</p>';
                                    }
                                    
                                    ?></span></td>


                                    <!-- <td><span class="tbody-text">Thời trang nam</span></td> -->
                     
                                </tr>
                                
                               <?php
                                }
                               ?>
                                
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
     
        </div>
    </div>
</div>
