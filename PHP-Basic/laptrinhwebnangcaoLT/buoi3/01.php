<?php
    $soNguyen = array(1 ,2 ,3, 4);
    // echo $soNguyen[1];

    function xuat($a = array()){
        foreach($a as $key => $value){
            echo 'giá trị thứ '. $key. ' là: '. $value. '<br>';
        }
    }
    xuat($soNguyen);
?>