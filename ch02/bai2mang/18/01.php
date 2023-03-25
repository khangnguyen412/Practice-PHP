<?php
    //chuyển đổi các key trong mãng thành chữ hoa hoặc ngược lại
    $source = array("php" => "php" , "zend" => "zend framework", "jla" => "joomla", 0 => "item 1");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $arr = array_change_key_case($source); // array_change_key_case(mãng); chuyển về chữ thường
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $arr = array_change_key_case($source, CASE_UPPER); // array_change_key_case(mãng, caseupper); chuyển về chữ hoa
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>