<?php
    //tìm kiếm phần tử và trả về khóa trong mãng
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", 0 => "item 1");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    echo $arr = array_search("zend framework", $source); // array_search(giá trị trong mãng, mãng được gọi) tìm kiếm phần tử và trả về khóa trong mãng
?>