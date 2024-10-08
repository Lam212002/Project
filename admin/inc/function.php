<?php

function get_header(){
    $path='lib/header.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}
function get_footer(){
    $path='lib/footer.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}

function get_sidebar(){
    $path='lib/footer.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo"đường dẫn bạn cần tìm hông tồn tại";
    }
}


?>