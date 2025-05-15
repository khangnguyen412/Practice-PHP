<?php
    //chuyển đổi qua lại giữa mãng và chuỗi
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", 0 => "item 1");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    echo $str = implode("--", $source); 
    // implode("kí tự để nối mãng", mãng) chuyển mãng thành chuỗi và mỗi chuỗi cách nhau "kí tự để nối mãng"
    

    $name = "Nguyễn Mạnh Quốc Khang";
    // explode("nơi để chia mãng", mãng) chuyển chuỗi thành mãng và mỗi phần cách nhau "nơi để chia mãng"
    $arr = explode(" ", $name);// gặp khoảng cách thì chia mãng
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>