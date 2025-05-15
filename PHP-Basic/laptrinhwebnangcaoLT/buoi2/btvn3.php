<?php
    $n = 10;
    function check($a){
        $sum = 0;
        for($i = 1; $i <= $a/2 ; $i++){
            if($a % $i == 0){
                $sum+=$i;
            }
        }
        if ($sum == $a) return true;
        return false;
    }
    echo '<h1>số được chọn: '. $n . '</h1><br>';
    if (check($n) == true){
        echo $n . ' là số hoàn thiện';
    }else echo $n . ' không là hoàn thiện';
?>