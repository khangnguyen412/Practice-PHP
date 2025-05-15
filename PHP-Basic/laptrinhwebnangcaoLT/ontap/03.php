<?php
    $x = 100;
    function checknt($a){
        if($a > 2){
            for($i = 2; $i <= $a/2; $i++){ //hoặc sqrt($a)
                if($a % $i == 0){
                    return false;
                }
            }
            return "số $a là số ng tố". "<br>";
        }else{
            return false;
        }
    }
    echo "Nhập số nguyên dương $x, xuất ra danh sách các số nguyên tố nhỏ hơn nó: ". "<br>";
    for ($i = 0; $i <= $x; $i++){
        if ($i > 2){
            $kq1 = checknt($i);
            echo $kq1;
        }
    }

    function checkht($a){
        $rs = 0;
        for($i = 1; $i < $a; $i++){
            if($a % $i == 0){
                $rs += $i; 
            }
        }
        if($rs == $a && $a != 0){
            return "số $a là số hoàn hảo". "<br>";
        }else{
            return false;
        }
    }
    echo "<br>". "Nhập số nguyên dương $x, xuất ra danh sách các số hoàn hảo nhỏ hơn nó: ". "<br>";
    for ($i = 0; $i <= $x; $i++){
        if ($i > 2){
            $kq2 = Checkht($i);
            echo $kq2;
        }
    }
?>