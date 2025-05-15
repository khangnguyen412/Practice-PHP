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
    
    $diff = array_intersect($source, $source1);
    //array_intersect($mãng1, $mãng2) trả về giá trị của mãng 1 tồn tại trong mãng 1 và trong mãng 2
    echo '<pre>';
    print_r($diff);
    echo '</pre>';
?>