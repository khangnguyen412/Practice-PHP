<?php
    /**
     * mãng số nguyên là mãng mà các chỉ số phần tử nó thuộc kiểu số nguyên
     * khai báo cách phần tử trong mãng
     */
    //cách 1 
    $source = array();  // -> đây là một mãng
    $source[] = "php";              // phần tử 0
    $source[] = "zend framework";   // phần tử 1
    $source[] = "joomla";           // phần tử 2
    print_r($source);
    echo '<br>';

    //cách 2
    $source1 = array();  // -> đây là một mãng
    $source1[0] = "php";              // phần tử 0
    $source1[1] = "zend framework";   // phần tử 1
    $source1[2] = "joomla";           // phần tử 2
    print_r($source1);
    echo '<br>';

    //cách 3 
    $source2 = array('php', 'zend freamwork', 'joomla');  // -> đây là một mãng
    print_r($source2);
    echo '<br>';

    //in ra phần tử được chỉ định trong mãng 
    echo $source2[1];
?>