<?php
    //so sánh phần tử của 2 mãng
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", "item1" => "item 2");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $source1 = array("php" => "php" , "zend" => "zend framework", "joomla" => "joomla", "item2" => "item 2");
    echo '<pre>';
    print_r($source1);
    echo '</pre>';
    
    $diff = array_diff_key($source, $source1);
    //array_diff_key($mãng1, $mãng2) trả về khóa có trong mãng 1 mà ko có trong mãng 2
    echo '<pre>';
    print_r($diff);
    echo '</pre>';
?>