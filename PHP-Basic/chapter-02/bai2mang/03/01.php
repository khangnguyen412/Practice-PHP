<?php
    /**
     * mãng số không liên tục là các chỉ số chỉ phẩn tử mãng cũng có thể là chuỗi 
     * khai báo cách phần tử trong mãng
     */
    //dưới đây là 1 mãng không liên tục 
    $source = array();  // -> đây là một mãng
    $source["php"] = "php";                 // phần tử có tên "php" có giá trị là "php"
    $source["zend"] = "zend framework";
    $source["joomla"] = "joomla";
    $source[] = "item 1"; // -> nếu ở đây phần tử không được đặt tên thì mặc định sẽ trở về tên số bắt đầu = 0
    
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    //in 1 phần tử trong mãng không liên tục
    echo "phần tử tại vị trí có tên là php:".$source["php"].'<br>';
?>