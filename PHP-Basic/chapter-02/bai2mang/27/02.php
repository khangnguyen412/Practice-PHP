<?php
    //xử lý giá trị các phần tử của mãng
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", "item1" => "item 1");

    function myfunction($val, $key){ //hàm có công dùng thực hiện in mãng
        echo $key. ": ". $val ."<br>";
    }

    array_walk($source, "myfunction") // array_walk($mãng, "tên hàm") xuất ra giá trị của một mãng giống foreach 01
?>