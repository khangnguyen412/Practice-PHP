<?php
    // xóa bỏ ký tự nằm bên phải
    $str = 'that is Khang    ';
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = rtrim($str);
    //rtrim($chuỗi) => xóa bỏ ký tự nằm bên phải
    //nếu rtrim không có tham số thêm thì mặc đinh là khoảng trống
    echo $find. " - lenght:". strlen($find). "<br>";
?>