<?php
    // xóa bỏ ký tự nằm bên trái
    $str = "that is Khang";
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = ltrim($str, "that");
    //ltrim($chuỗi, "tham_số_cần_xóa") => xóa bỏ ký tự nằm bên trái của "tham_số_cần_xóa"
    echo $find. " - lenght:". strlen($find). "<br>";
?>