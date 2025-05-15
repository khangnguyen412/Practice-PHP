<?php
    //xuất giá trị key ngẫu nhiêu 
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", 0 => "item 1");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $arr = array_rand($source, 2); // array_merge(tên mãng, sô lượng phần tử muốn lấy ) xuất key ngẫu nhiên
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>