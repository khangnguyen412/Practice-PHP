<?php
    //tính tổng, tìm max, min trong các mãng
    $source = array(5,1,4,55,66,7,8,2,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $sum = array_sum($source); // array_sum(tên mãng) tính tổng
    echo $sum."<br>";

    // tính trung bình của mãng
    $long = count($source);
    echo "trung bình cộng của mãng: ".$sum/$long."<br>";

    $max = max($source); // max(tên mãng) tìm giá trị lớn nhất
    echo $max."<br>";

    $min = min($source); // min(tên mãng) tìm giá trị nhỏ nhất
    echo $min."<br>";
?>