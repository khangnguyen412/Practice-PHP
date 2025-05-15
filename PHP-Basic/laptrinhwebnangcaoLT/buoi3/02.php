<?php
    $soNguyen = array(1 ,6 ,3, 28);
    // echo $soNguyen[1];
    function check($a){
        $sum = 0;
        for($i = 1; $i <= $a/2 ; $i++){
            if($a % $i == 0){
                $sum+=$i;
            }
        }
        // if ($sum == $a) {
        //     return true;
        // }
        // return false;
        return $sum == $a? true: false;  
    }

    function xuat($a = array()){
        for($i = 0; $i < count($a); $i++ ){
            if(check($a[$i])){
                echo $a[$i]. " là số hoàn thiện"."<br>";
            }else{
                echo $a[$i] . " không là số hoàn thiện"."<br>";
            }
        }
    }
    xuat($soNguyen);
?>