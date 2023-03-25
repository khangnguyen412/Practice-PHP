<?php
    // trích xuất nội dung của chuỗi
    $str = "this is PHP";
    echo $str. "<br>";

    $str1 = substr($str, 0, 4); 
    //substr($chuỗi, bắt_đầu, chiều_dài); => trích xuất chuỗi từ vị trí bắt_đầu và tới chiều_dài
    echo $str1. "<br>";

    $str2 = substr($str, 4, 4); 
    echo $str2. "<br>";

    $str3 = substr($str, 4, -2);// kết quả sẽ ra là is vì -4 thì tính từ bên phải qua 
    echo $str3. "<br>";

    $str4 = substr($str, -4, 6);
    // kết quả sẽ ra là PHP vì -4 thì tính từ bên phải qua 6 ký tự, nhưng vì PHP là hết nên chỉ lấy PHP
    echo $str4. "<br>";

    $str4 = substr($str, -4, 0);
    // rỗng vì chiều_dài không lấy ký tự nào cả
    echo $str4. "<br>";

    $str4 = substr($str, -4, -4);
    // rỗng vì không lấy đc -4 có chiều dài -4 
    echo $str4. "<br>";
?>