<?php
    //lấy danh sách các khóa và giá trị của 1 mãng
    $source = array("name" =>"php" ,"time" =>100);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    //array_keys(tên_mãng): trả về một mãng liên tục có phần tử là khóa của (tên_mãng)
    $newarr = array_keys($source);
    echo '<pre>';
    print_r($newarr);
    echo '</pre>';
?>