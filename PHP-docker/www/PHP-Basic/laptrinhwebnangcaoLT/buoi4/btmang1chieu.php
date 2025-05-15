<?php
    $songuyen = array(11, 13, 17, 10, 2, 5, 7, 9);
    function checknt($x){
        if($x < 2){
            return 0;
        }else{
            $dem = 0;
            for($i=2; $i<= $x/2; $i++)
                if($x % $i ==0){
                    return 0;
                    $dem++;
                }
                else{
                    return 1;
                }
            if($dem==0){//
                return true;
            }else return false;
        }
    }
    function searchmax($x){
        $max = $x[0];
        for($i = 1; $i < count($x); $i++){
            if($max < $x[$i]){
                $max = $x[$i];
            } 
        }
        return $max;
    }
    function sortarr($x){
        $stemp = "";
        for($i = 0; $i < count($x) - 1; $i++){
            for($j = $i + 1; $j < count($x); $j++){
                if($x[$i] > $x[$j]){
                    $stemp = $x[$i];
                    $x[$i] = $x[$j];
                    $x[$j] = $stemp;
                }
            }
        }
        echo '<pre>';
        print_r($x);
        echo '</pre>';
    }
    function sumarr($x){
        $sum = 0;
        // for($i = 0; $i < count($x); $i++){
        //     $sum += $x[$i];
        // }
        foreach($x as $val){
            $sum += $val;
        }
        return $sum;
    }
    function xuat($arr){
        $songuyento = array();
        echo 'bài 1/ số nguyên trong mãng:'.'<br>';
        for($i = 0; $i < count($arr); $i++){
            if(checknt($arr[$i])){
                $songuyento[] = $arr[$i];
            }  
        }
        echo '<pre>';
        print_r($songuyento);
        echo '</pre>';

        $solonnhat = searchmax($songuyento);
        echo 'bài 2/ mãng số lớn nhất trong mãng là: '. $solonnhat.'<br>'.'<br>';

        echo 'bài 3/ sắp xếp mãng : '.'<br>';
        sortarr($songuyento);

        $sum = sumarr($songuyento);
        echo 'bài 4/ tổng các số nguyên tố mãng : '. $sum.'<br>';
    }
    echo '<pre>';
    print_r($songuyen);
    echo '</pre>';
    $kq = xuat($songuyen);
?>