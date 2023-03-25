<?php
    //truy xuất đến phần tử của mãng bằng current, next, end, previous
    $source = array("php" ,"time" ,"name", "php" ,"time" ,"name");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    echo "current: ".current($source)."<br>";      //current($mãng) in ra phần tử hiện tại trong mãng => "php"
    echo "next: ".next($source)."<br>";         //next($mãng) in ra phần tử kế tiếp trong mãng => "time"
    echo "current: ".current($source)."<br>";
    //sau khi thực hiện dòng lệnh next thì con trỏ current sẽ chỉ tới "time" mà không còn là "php"
    echo "next: ".next($source)."<br>";         // =>"name"
    echo "prev: ".prev($source)."<br>";         //prev($mãng) in ra phần tử phía trước trong mãng => "time"
    echo "reset: ".reset($source)."<br>";        //reset($mãng) trở lại phần tử ban đầu trong mãng => "php"
    echo "end: ".end($source)."<br>";        //end($mãng) trở lại phần tử cuối cùng trong mãng => "name"
?>