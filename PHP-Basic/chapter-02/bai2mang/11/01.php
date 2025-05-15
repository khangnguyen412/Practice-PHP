<?php
    //hoán đổi giá trị và khóa trong mãng (giá trị thành vị trí - vị trí thành giá trị)
    $source = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $new = array_flip($source); // array_flip(tên mãng) giá trị thành vị trí - vị trí thành giá trị
    echo '<pre>';
    print_r($new);
    echo '</pre>';
?>