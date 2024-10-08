<?php
session_start();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[] = array(
                'product_name' => $cart_item['product_name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp'],'size'=>$cart_item['size']
            );
            $_SESSION['cart']=$product;
        }else{
            $tangsoluong=$cart_item['soluong']-1;
            if($cart_item['soluong']>1){
                $product[] = array(
                    'product_name' => $cart_item['product_name'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp'],'size'=>$cart_item['size']
                );
            }else{
                $product[] = array(
                    'product_name' => $cart_item['product_name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp'],'size'=>$cart_item['size']
                );
            }
            $_SESSION['cart']=$product;

        }   
    }
    echo "<script> window.location.href='?mod=shopping_cart&act=main'</script>";

}

?>