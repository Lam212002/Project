<?php

function get_header(){
    $path='layout/header.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}
function get_footer(){
    $path='layout/footer.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}

function get_nav(){
    $path='layout/nav-item.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}
function get_sidebar(){
    $path='layout/sidebar.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}

?>