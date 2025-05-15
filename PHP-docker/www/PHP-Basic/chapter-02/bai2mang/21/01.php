<?php
    //chuyển mãng về chuỗi ký tự đặc biệt và ngược lại
    $source = array("name" => "php" , "time" => 80, 100);    
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $result = serialize($source); // serialize($mãng); chuyển mãng sang chuỗi đặc biệt
    echo $result;

    $source1 = 'a:3:{s:4:"name";s:3:"php";s:4:"time";i:80;i:0;i:100;}';    
    $arr = unserialize($source1); // unserialize($chuỗi); chuyển chuỗi đặc biệt sang mãng
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>