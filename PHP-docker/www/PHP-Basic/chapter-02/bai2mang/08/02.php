<?php
    //xóa bỏ phần tử ở vị trí bất kỳ của 1 mãng
    $source = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    unset($source[2]);
    // unset($source[2], $source[5]); -> xóa nhiều phần tử 1 lúc
    // unset($source); -> xóa toàn bộ mãng
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>