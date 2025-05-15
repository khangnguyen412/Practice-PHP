<?php
    // chuyển chữ cái đầu tiên của mỗi từ thành chữ hoa
    $str = 'this is Khang';
    echo $str."<br>";
    $change = ucwords($str);//ucwords($chuỗi) => chuyển chữ cái đầu tiên của mỗi từ thành chữ hoa
    echo $change;
?>