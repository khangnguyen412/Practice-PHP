<?php
    //xử lý giá trị các phần tử của mãng
    // hàm array_walk gửi giá trị của mãng đến một hàm nào đó để xử lý
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", "item1" => "item 1");

    foreach($source as $key => $val){ //xuất giá trị của một mãng 
        echo $key. ": ". $val ."<br>";
    }
?>