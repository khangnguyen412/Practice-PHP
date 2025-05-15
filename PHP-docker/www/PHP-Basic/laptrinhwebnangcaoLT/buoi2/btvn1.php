<?php
    $a = 10;
    $b = 20;
    $c = 4;
    $delta = '';

    $delta = $b * $b - (4 * $a * $c);

    if ( $delta < 0 ){
        echo 'phương trình vô nghiệm';
    }else if ( $delta == 0){
        $x = - $b/ (2 * $a);
        echo 'phương trình nghiệm kép x1 = x2 = '. $x;
    }else if ( $delta > 0){
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo 'phương trình nghiệm riêng biệt: '.'<br>';
        echo 'x1= '.$x1.'<br>';
        echo 'x2= '.$x2.'<br>';
    }else {
        echo 'sai cú pháp'.'<br>';
    }
?>