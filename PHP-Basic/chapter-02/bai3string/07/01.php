<?php
    // tìm kiếm vị trí từ xuất hiện đầu tiên trong chuỗi
    $str = 'that is Khang';
    echo $str."<br>";
    $find = stripos($str, "is");//stripos($chuỗi, "từ_khóa") => tìm "từ_khóa" có vị trí xuất hiện đầu tiên trong chuỗi
    echo $find;
?>