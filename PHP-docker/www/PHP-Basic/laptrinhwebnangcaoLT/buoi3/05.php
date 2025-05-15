<?php
    $soNguyen = array("a" => 1 ,"b" => 6 ,"c" => 3 ,"d" => 28);
    function check($a){
        if($a % 2 == 0){
            return true;
        } 
    }
    function xuat($a){
        $sum = 0;
        foreach($a as $key => $value){
            echo $key. ':'. $value. '<br>';
            if(check($value)){
                $sum = $sum + $value;
            }
        }
        return $sum;
    }
    echo xuat($soNguyen);
?>