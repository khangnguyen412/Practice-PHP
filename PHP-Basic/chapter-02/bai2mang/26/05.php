<?php
    //so sánh phần tử của 2 mãng
    $source = array("php" => "php" , "zend" => "zend framework", "joomla", "item1" => "item 2");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $source1 = array("php1" => "php" , "zends" => "zend framework", "joomla" => "joomla", "item 2");
    echo '<pre>';
    print_r($source1);
    echo '</pre>';
    
    $diff = array_intersect_key($source, $source1);
    //array_intersect_key($mãng1, $mãng2) trả về khóa của mãng 1 tồn tại trong mãng 1 và trong mãng 2
    echo '<pre>';
    print_r($diff);
    echo '</pre>';
?>