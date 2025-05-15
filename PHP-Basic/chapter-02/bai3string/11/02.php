<?php
    // xóa bỏ ký tự nằm bên phải
    $str = "that is Khang\n\n\n";
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = rtrim($str);
    //rtrim($chuỗi) => xóa bỏ ký tự nằm bên phải
    //nếu rtrim không có tham số thêm thì mặc đinh là bỏ ký tự khoảng trống, \n-xuống dòng
    echo $find. " - lenght:". strlen($find). "<br>";
?>