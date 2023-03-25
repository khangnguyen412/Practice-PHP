<?php
    //lấy danh sách các khóa và giá trị của 1 mãng
    $source = array("php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    //array_shift(tên_mãng): loại bỏ phần tử đầu tiên của mãng, hàm in ra phần tử đầu tiên đã được loại bỏ
    $newarr = array_shift($source);
    print_r($newarr);

    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>