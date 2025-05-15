<?php
    //tạo mãng bằng array_combine
    $key = array(5,1,4,2,5,6);
    $val = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    
    echo '<pre>';
    print_r($key);
    echo '</pre>';

    echo '<pre>';
    print_r($val);
    echo '</pre>';

    $source1 = array_combine($key, $val);   
    //array_combine($mãng khóa, $mãng giá trị); sẽ tạo ra 1 mãng mới có khóa là $mãng khóa, giá trị là $mãng giá trị
    echo '<pre>';
    print_r($source1);
    echo '</pre>';
?>