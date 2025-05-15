<?php
    //gộp nhiều mãng lại thành 1 mãng
    $source = array(5,1,4,2,5,6,6,7,8,2,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';
    $source1 = array("a", "b", "c");
    echo '<pre>';
    print_r($source1);
    echo '</pre>';

    $arr = array_merge($source, $source1); // array_merge(tên mãng1, tên mãng2) gộp mãng
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>