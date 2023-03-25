<?php
    //lấy danh sách các khóa và giá trị của 1 mãng
    $source = array("name" =>"php" ,"time" =>100);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    //array_values(tên_mãng): trả về một mãng liên tục có phần tử là giá trị của (tên_mãng)
    $newarr = array_values($source);
    echo '<pre>';
    print_r($newarr);
    echo '</pre>';
?>