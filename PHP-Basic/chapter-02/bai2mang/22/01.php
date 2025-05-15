<?php
    //xáo trộn các thứ tự trong mãng
    $source = array(5,1,4,2,5,6,6,7,8,2,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    shuffle($source);   //shuffle($mãng); xáo trộn các thứ tự trong mãng
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>