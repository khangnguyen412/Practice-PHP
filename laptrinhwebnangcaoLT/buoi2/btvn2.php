<?php
    $n = 7;
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
    if (check($n) == true){
        echo $n . ' là số nguyên tố';
    }else echo $n . ' không là số nguyên tố';
?>