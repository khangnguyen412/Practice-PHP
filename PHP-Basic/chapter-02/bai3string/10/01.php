<?php
    // xóa bỏ ký tự nằm bên trái
    $str = '    that is Khang';
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = ltrim($str);
    //ltrim($chuỗi) => xóa bỏ ký tự nằm bên trái
    //nếu ltrim không có tham số thêm thì mặc đinh là khoảng trống
    echo $find. " - lenght:". strlen($find). "<br>";
?>