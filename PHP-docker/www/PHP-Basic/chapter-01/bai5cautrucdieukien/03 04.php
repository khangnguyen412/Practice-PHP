<?php
    /**cấu trúc điều kiện if-else if-else
     * cú pháp: 
     *      if(điều kiện 1){
     *          câu lệnh 1 
     *      }else if(điều kiện 2){
     *          câu lệnh 2 
     *      }
     */
    $number = -20; 
    $n = $number % 2;

    if($number % 2 == 0 && $number > 0){
        echo "số nguyên dương chẵn". "<br>";
    }else if($number % 2 != 0 && $number > 0){
        echo "số nguyên dương lẻ". "<br>";
    }else{
        echo "số âm". "<br>";
    }
    echo $kq = ($number % 2 == 0)? "số chẵn": "số lẻ";
    
    $result1 = ($number >= 0)? "số dương": "số âm";
    $result2 = ($n == 0)? "chẵn": "lẻ";
    echo $result = $result1. " ". $result2. "<br>";
?>