<?php
    //trích xuất 1 đoạn phần tử của mãng
    $source = array(3,6,7,8,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $arr = array_slice($source, 1);
    //array_slice($mãng, vị trí lấy phần tử) từ vị trí đc chỉ định sẽ rút các phần tử phía sau ra thành 1 mãng mới 
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $arr2 = array_slice($source, 1, 3);
    //array_slice($mãng, vị trí lấy phần tử, số phần tử cần lấy) từ vị trí đc chỉ định sẽ rút các phần tử theo số phần cần lấy thành 1 mãng mới 
    echo '<pre>';
    print_r($arr2);
    echo '</pre>';
?>