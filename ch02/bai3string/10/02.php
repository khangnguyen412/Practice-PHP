<?php
    // xóa bỏ ký tự nằm bên trái
    $str = "\n\n\nthat is Khang";
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = ltrim($str);
    //ltrim($chuỗi) => xóa bỏ ký tự nằm bên trái
    //nếu ltrim không có tham số thêm thì mặc đinh là bỏ ký tự khoảng trống, \n-xuống dòng
    echo $find. " - lenght:". strlen($find). "<br>";
?>