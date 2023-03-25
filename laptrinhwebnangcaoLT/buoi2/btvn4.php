<?php
    $n = 20;
    function check($a){
        if ($a <= 1) return false;
        for($i = 2; $i <= sqrt($a); $i++){
            if($a % $i == 0){
                return false;
            }
        }
        return true;
    }
    echo '<h1>số được chọn: '. $n . '</h1><br>';
    for($i = 0; $i <= $n; $i++){
        if(check($i) == true) echo $i.' là số nguyên tố'. '<br>';
    }
?>