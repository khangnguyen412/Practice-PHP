<?php
    // xóa bỏ ký tự nằm bên phải
    $str = "that is Khang";
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = rtrim($str, "Khang");
    //rtrim($chuỗi, "tham_số_cần_xóa") => xóa bỏ ký tự nằm bên phải của "tham_số_cần_xóa"
    echo $find. " - lenght:". strlen($find). "<br>";
?>