<?php

function redirect($url='?pages=list_product'){
    if(!empty($url)){
        header("Location:{$url}");
    }
}


?>