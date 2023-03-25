<?php
    //nối chuổi 
    //trường hợp 1
    $str = "đây là php". " của Khang <br>"; //để nối chuổi ta dùng dấu . 
    echo $str;
    var_dump($str);

    $str = 1 . 2; //biến sẽ nối 2 gtri int thành string
    echo $str;
    var_dump($str);

    $str = 1.2; //1.2 ko có khoảng cách là giá trị float
    echo $str;
    var_dump($str);


    //trường hợp 2
    $name = "php ";
    $str2 = "is ez <br>";
    echo $name . $str2;

    //trường hợp 3 lồng chuỗi và biến 
    $name = "php";
    $str3 = "is ez <br>";
    echo $name . " ". $str3;
?>