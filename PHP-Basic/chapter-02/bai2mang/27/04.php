<?php
    //xử lý giá trị các phần tử của mãng
    $source = array(2,4,6,8);

    function myfunction(&$val, $key, $param){ //hàm có công dùng thực hiện in mãng
        $val = $val * $param;
    }

    array_walk($source, "myfunction", 3);
    // array_walk($mãng, "tên hàm", "tham số muốn thêm vào (nếu có)") xuất ra giá trị của một mãng giống foreach 01
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>