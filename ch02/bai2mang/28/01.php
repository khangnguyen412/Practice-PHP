<?php
    //xử lý giá trị các phần tử của mãng
    //hàm array_map gửi giá trị của một hay nhiều mãng đến một hàm nào đó để xử lý và trả về một mãng mới
    $source = array(3,6,7,8,3);
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    $arr = array();
    foreach($source as $key => $val){ //xuất giá trị của một mãng 
        if($val%2 == 0){
            $arr[] = "even";
        }else{
            $arr[] = "odd";
        }
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>