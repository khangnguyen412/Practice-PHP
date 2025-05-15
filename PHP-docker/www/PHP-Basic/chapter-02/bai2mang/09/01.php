<?php
    //thêm 1 hay nhiều phần tử vào cuối mãng
    $source = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    array_push($source, 'pt1', 'pt2'); // thêm 1 hay nhiều phần tử vào cuối mãng
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>