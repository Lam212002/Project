<?php
session_start();


if (isset($_POST['themsanpham'])) {
    $id = $_GET['id'];
    $size=$_POST['size'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_product WHERE id_product='" . $id . "' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        $new_product = array(array(
            'product_name' => $row['product_name'], 'id' => $id, 'soluong' => $soluong, 'giasp' => $row['price'], 'hinhanh' => $row['hinhanh'], 'masp' => $row['product_code'],'size'=>$size
        ));


        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                //nếu dữ liệu trùng thì số lượng tăng thêm 1
                if ($cart_item['id'] == $id) {
                    $product[] = array(
                        'product_name' => $cart_item['product_name'], 'id' => $cart_item['id'], 'soluong' => $soluong+1, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp'],'size'=>$cart_item['size']
                    );
                    $found = true;
                } else {
                    //nếu dữ liệu không trùng thì nỗi mảng

                    $product[] = array(
                        'product_name' => $cart_item['product_name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp'],'size'=>$cart_item['size']
                    );
                }
            }
            if($found==false){
                //liện kết dữ liệu new_product với product
                $_SESSION['cart'] = array_merge($product,$new_product);
            }else{
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    echo "<script> window.location.href='?mod=shopping_cart&act=main'</script>";
    // print_r($_SESSION['cart']);
}
?>