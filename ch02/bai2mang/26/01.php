<?php
    //so sánh phần tử của 2 mãng
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", "item1" => "item 1");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $source1 = array("php" => "php" , "zend" => "zend framework", "jla" => "jla", "item1" => "item 2");
    echo '<pre>';
    print_r($source1);
    echo '</pre>';
    
    $diff = array_diff($source, $source1);
    //array_diff($mãng1, $mãng2) trả về giá trị có trong mãng 1 mà ko có trong mãng 2
    echo '<pre>';
    print_r($diff);
    echo '</pre>';
?>