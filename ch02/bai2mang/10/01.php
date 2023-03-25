<?php
    //đảo ngược phần tử trong mãng
    $source = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $new = array_reverse($source); // array_reverse(tên mãng) dùng để đảo ngược phần tử trong mãng
    echo '<pre>';
    print_r($new);
    echo '</pre>';
?>