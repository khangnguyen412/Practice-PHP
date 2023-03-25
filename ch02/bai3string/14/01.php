<?php
    // chuyển đổi qua lại giữa mãng và chuỗi
    $arr = array("vàng", "xanh", "đỏ");

    echo '<pre>';
    print_r($arr);
    echo '</pre>'. "<br>";

    $str = implode(" ", $arr); 
    //implode("ký_tự_để_nối_mãng", $mãng); => chuyển đổi qua lại giữa mãng và chuỗi
    echo $str. "<br>";
?>