<?php
    // xóa bỏ ký tự nằm bên trái phải
    $str = '    that is Khang    ';
    echo $str. " - lenght:". strlen($str). "<br>";
    $find = trim($str);
    //trim($chuỗi) => xóa bỏ ký tự nằm bên trái phải
    //nếu trim không có tham số thêm thì mặc đinh là khoảng trống
    echo $find. " - lenght:". strlen($find). "<br>";
?>