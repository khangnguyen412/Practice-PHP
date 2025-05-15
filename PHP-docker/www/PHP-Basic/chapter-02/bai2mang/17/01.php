<?php
    //kiểm ra khóa hay giá trị có tồn tại trong mãng không
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", 0 => "item 1");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    if(array_key_exists("Zend", $source)){// array_key_exists(khóa, mãng được gọi) kiểm tra khóa
        echo 'khóa có tồn tại trong mãng'.'<br>';
    }else  echo 'khóa ko tồn tại trong mãng'.'<br>';

    if(in_array("joomla", $source)){// in_array(giá trị, mãng được gọi) kiểm tra giá trị
        echo 'giá trị có tồn tại trong mãng'.'<br>';
    }else  echo 'giá trị ko tồn tại trong mãng'.'<br>';
?>