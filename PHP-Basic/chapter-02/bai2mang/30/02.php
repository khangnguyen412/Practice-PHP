<?php
    //trích xóa bor 1 đoạn phần tử của mãng và thay để bằng phần tử của mãng khác
    $source = array(3,6,7,8,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $source1 = array(1,2,3,4,5,6,7);
    echo '<pre>';
    print_r($source1);
    echo '</pre>';

    $arr = array_splice($source, 2, 2, $source1);
    //array_slice($mãng, vị trí lấy phần tử, số phần tử xóa bỏ, $mãng2) 
    //từ "vị trí lấy phần tử" sẽ xóa các phần tử tương đương "số phần tử xóa bỏ" và bổ sung thêm $mãng2
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>