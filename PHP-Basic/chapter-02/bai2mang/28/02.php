<?php
    //xử lý giá trị các phần tử của mãng
    $source = array(3,6,7,8,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    function check($num){ //hàm có công dùng thực hiện chức năng gì đó 
        $rs = ($num % 2 == 0)? "even": "odd";
        return $rs;
    }

    $arr = array_map("check", $source); // array_map("hàm", $mãng) đưa giá trị của một mãng tới một hàm nào đó
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>