<?php
    // kiểm tra chuỗi có rỗng hay không 
    $str = 'that is Khang    ';
    
    if(!isset($str) || trim($str) ==  ""){
        echo "empty". "<br>";
    }
    else{
        echo "not empty". "<br>";
    }
?>