<?php
    // tìm kiếm vị trí từ xuất hiện cuối trong chuỗi
    $str = 'this is Khang';
    echo $str."<br>";
    $find = strripos($str, "is");
    //strripos($chuỗi, "từ_khóa") => tìm "từ_khóa" có vị trí xuất hiện cuối trong chuỗi
    echo $find;
?>