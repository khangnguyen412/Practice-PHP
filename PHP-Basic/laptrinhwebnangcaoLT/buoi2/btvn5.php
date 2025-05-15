<?php
    $n = 10000;
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
    echo '<h1>số được chọn: '. $n . '</h1><br>';
    for($i = 0; $i <= $n; $i++){
        // if(check($i) == true) echo $i.' là số hoàn thiện'. '<br>';
        if(check($i)) {
            echo $i.' là số hoàn thiện'. '<br>';
        }
    }
?>