<?php
    $soNguyen = array(1 ,6 ,3, 28);
    function check($a){
        if($a % 2 == 0){
            return true;
        } 
    }
    function tong($a = array()){
        $sum = 0;
        for($i = 0; $i < count($a); $i++ ){
            if(check($a[$i])== true){
                $sum = $sum + $a[$i];
            }
        }
        return $sum;
    }
    echo 'tổng là số chẵn trong mãng: '. tong($soNguyen);
?>