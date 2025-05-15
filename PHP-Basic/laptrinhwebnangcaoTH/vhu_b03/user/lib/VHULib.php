<?php

function isNT($number) {
    if (gettype($number) == "integer") {
        if ($number < 2) {
            return false;
        } else {
            $dem = 0;
            for ($i = 1; $i < ($number); $i++) {
                if ($number % $i == 0) {
                    $dem++;
                }
            }
             
            if ($dem == 0) {
                return true;
            }
            return false;
        }
    } else {
        return false;
    }
}

// 
function xuatDSNT($arr = array()) {
    foreach ($arr as $value) {
        if (isNT($value)) {
            echo $value . " ";
        }
    }
}

?>
