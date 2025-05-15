<?php
    // đến số ký tự của chuổi 
    $str2 = 'đây là Khang';
    $lenght = mb_strlen($str2);
    //mb_strlen($chuỗi); => xuất ra số lượng ký tự có trong chuỗi đối với chuỗi là utf-8
    echo $lenght. "<br>";
    var_dump($str2);
    echo "<br>";
?>