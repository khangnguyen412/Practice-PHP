<?php
    $mangsonguyen = array();
    for ($i = 0; $i <= 100; $i++){
        $mangsonguyen[$i] = $i;
    }
    echo "mãng số nguyên ban đầu là từ 1 => 100 ". "<br>". "<br>";

    function xuat($arr){
        foreach($arr as $key => $val){
            echo "số nguyên tố thứ ". $key. " là:". $val. "<br>";
        }
    }

    //tìm số nguyên tố có trong mảng.
    function checknt($n){
        if ($n < 2){
            return 0;
        }
        for($i = 2; $i <= sqrt($n); $i++){
            if($n % $i == 0){
                return 0;
            }
        }
        return 1;
    }

    //tìm số nguyên tố lớn nhất trong mảng.
    function findmax($arr){
        $max = 0;
        foreach($arr as $val){
            if($val > $max){
                $max = $val;
            }
        }
        return $max;
    }

    //sắp xếp ngược 
    function sortarr($arr){
        $temp = "";
        for($i = 0; $i < count($arr)-1 ; $i++){
            for($j = $i+1; $j < count($arr); $j++){
                if($arr[$i] < $arr[$j]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        xuat($arr);
    }
    //tính tổng các mãng
    function sumarr($arr){
        $sum = 0;
        foreach($arr as $key => $val){
            $sum += $val;
        }
        return $sum;
    }
    //hàm chính
    function main($arr){
        $songto = array();

        //bài 1
        echo "1/ các số nguyên tố có trong mãng: ". "<br>";
        for ($i = 0; $i < count($arr); $i++){
            if(checknt($arr[$i]) == 1){
                $songto[] = $arr[$i];
            }
        }
        xuat($songto);
        echo "<br>";
        
        //bài 2
        $max = findmax($songto);
        echo "2/ số nguyên tố lớn nhất trong mãng là : $max". "<br>";
        echo "<br>";

        //bài 3
        echo "3/ số nguyên tố giảm dần:". "<br>";
        sortarr($songto);
        echo "<br>";
        //hoặc
        rsort($songto);
        xuat($songto);
        echo "<br>";

        //bài 4
        $sum = sumarr($songto);
        echo "4/ tổng mãng: $sum". "<br>";
        //hoặc
        echo "hoặc: ". array_sum($songto);
    }
    $kq = main($mangsonguyen);
?>