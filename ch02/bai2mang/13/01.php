<?php
    //thống kê số lần xuất hiện của phần tử trong mãng
    $source = array(5,1,4,2,5,6,6,7,8,2,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $arr = array_count_values($source); // array_count_values(tên mãng) thống kê số lần xuất hiện của phần tử
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>