<?php
    //dưới đây là 1 mãng không liên tục 
    $source = array("php" => "php" , "zend" => "zend framework", "joomla" => "joomla", 0 => "item 1");  // -> đây là một mãng
    //khái báo phần tử không liên tục tại mãng

    echo '<pre>';
    print_r($source);
    echo '</pre>';

    //in 1 phần tử trong mãng không liên tục
    echo "phần tử tại vị trí có tên là php:".$source["php"].'<br>';
?>