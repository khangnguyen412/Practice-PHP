<?php
    //loại bỏ giá trị trùng nhau của 1 mãng
    $source = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $newarr = array_unique($source);
    echo '<pre>';
    print_r($newarr);
    echo '</pre>';
?>