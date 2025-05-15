<?php
    // xóa bỏ ký tự nằm bên trái phải
    $str = "\n\n\nthat is Khang\n\n\n";
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = trim($str);
    //trim($chuỗi) => xóa bỏ ký tự nằm bên phải
    //nếu trim không có tham số thêm thì mặc đinh là bỏ ký tự khoảng trống, \n-xuống dòng
    echo $find. " - lenght:". strlen($find). "<br>";
?>