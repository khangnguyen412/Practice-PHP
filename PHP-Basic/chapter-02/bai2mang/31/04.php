<?php
    //sắp xếp các phần tử của mãng
    $source = array("c" =>3, "b" =>6, "a" =>7, "d" =>8);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    krsort($source);  //krsort($mãng); sắp xếp khóa của các mãng giảm dần
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>