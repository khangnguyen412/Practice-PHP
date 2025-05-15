<?php
    //tạo mãng từ biến có sẵn
    $first = "nguyễn";
    $last = "khang";
    $source = compact("first", "last");   //compact("biến 1", "biến 2"); tạo mãng từ biến có sẵn
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>