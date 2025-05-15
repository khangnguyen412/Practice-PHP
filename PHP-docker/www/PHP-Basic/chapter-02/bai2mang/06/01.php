<?php
    //lấy danh sách các khóa và giá trị của 1 mãng
    $source = array("php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    //array_pop(tên_mãng): loại bỏ phần tử cuối cùng của mãng, hàm in ra phần tử cuối cùng đã được loại bỏ
    $newarr = array_pop($source);
    print_r($newarr);

    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>