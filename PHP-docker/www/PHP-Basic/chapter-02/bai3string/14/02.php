<?php
    // chuyển đổi qua lại giữa mãng và chuỗi
    $str = "vàng|xanh|đỏ";
    echo $str. "<br>";

    $arr = explode("|", $str); 
    //explode("ký_tự_để_cắt_chuỗi", $chuổi); => chuyển đổi qua lại giữa mãng và chuỗi

    echo '<pre>';
    print_r($arr);
    echo '</pre>'. "<br>";
?>