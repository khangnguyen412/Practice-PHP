<?php
    //dưới đây là 1 mãng không liên tục 
    $source = array("php" => "php" , "zend" => "zend framework", "joomla" => "joomla", 0 => "item 1");  // -> đây là một mãng
    //khái báo phần tử không liên tục tại mãng

    // echo '<pre>';
    // print_r($source);
    // echo '</pre>';

    //sử dụng foreach để in ra mãng không liên tục
    foreach($source as $key => $val){
        echo "giá trị của mãng tại phần tử ".$key.": ".$val.'<br>';
    }
?>