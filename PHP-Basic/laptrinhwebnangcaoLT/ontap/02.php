<?php
    $x = 10;
    $y = 20; 
    $z = 8;
    function ptb2($a, $b, $c){
        $delta = pow($b, 2) - (4 * $a * $c);
        if($delta > 0){
            $x1 = (-$b + sqrt($delta))/(2*$a); 
            $x2 = (-$b - sqrt($delta))/(2*$a); 
            echo "=> phương trình có 2 nghiệm phân biệt:". "<br>";
            echo "x1 = $x1". "<br>";
            echo "x2 = $x2". "<br>";
        }elseif($delta == 0){
            $x = -$b /(2*$a); 
            echo "=> phương trình bậc 2 có nghiệm kép:". "<br>";
            echo "x = $x". "<br>";
        }elseif($delta < 0){
            $x = -$b /(2*$a); 
            echo "=> phương trình bậc 2 vô nghiệm". "<br>";
        }
    }
    echo "phương trình bậc 2: $x". "x^2 + $y". "x + $z = 0". "<br>";
    $kq1 = ptb2($x, $y, $z);
    echo $kq1;

    $i = 9;
    function checknt($a){
        if($a > 2){
            for($i = 2; $i <= sqrt($a); $i++){
                if($a % $i == 0){
                    return "số $a không phải là số ng tố";
                }
            }
            return "số $a là số ng tố";
        }else{
            return "số $a ko phải số ng tố";
        }
    }
    $kq2 = checknt($i);
    echo "<br>";
    echo "kiểm tra số $i có phải là số nguyên dương hay ko?". "<br>";
    echo $kq2. "<br>";

    $p = 6;
    function checkht($a){
        $rs = 0;
        for($i = 1; $i < $a; $i++){
            if($a % $i == 0){
                $rs += $i; 
            }
        }
        if($rs == $a && $a != 0){
            return "số $a là số hoàn thiện";
        }else{
            return "số $a không phải là số hoàn thiện";
        }
    }
    $kq3 = checkht($p);
    echo "<br>";
    echo "kiểm tra số $p có phải là số hoàn thiện hay ko?". "<br>";
    echo $kq3. "<br>";
?>