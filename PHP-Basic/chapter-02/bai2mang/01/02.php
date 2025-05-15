<?php
    //kiểm tra mãng rỗng
    $source = array(); // -> đây là một mãng
    $source[] = "php";
    $source[] = "zend framework";
    $source[] = "joomla";

    $length = count($source); // dùng để đếm chiều dài của mãng
    echo 'chiều dài của mãng là: '.$length .'<br>';

    //cách 1 
    if($length != 0){
        echo 'không là mãng rỗng' .'<br>';
    } else echo 'mãng rỗng' .'<br>';

    //cách 2: sử dụng empty
    if(!empty($source)){
        echo 'không là mãng rỗng' .'<br>';
    } else echo 'mãng rỗng' .'<br>';
?>