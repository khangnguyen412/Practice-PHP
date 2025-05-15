<?php
    //xử lý giá trị các phần tử của mãng
    $source = array(3,6,7,8,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $source1 = array(2,4,6,7,8);
    echo '<pre>';
    print_r($source1);
    echo '</pre>';

    function check($num1, $num2){ //hàm có công dùng thực hiện chức năng gì đó 
        $rs = $num1 * $num2;
        return $rs;
    }

    $arr = array_map("check", $source, $source1); // array_map("hàm", $mãng, $mãng2) đưa giá trị của nhiều mãng tới một hàm nào đó
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>