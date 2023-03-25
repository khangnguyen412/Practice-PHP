<?php
    /**cấu trúc điều kiện if-else
     * cú pháp: 
     *      if(điều kiện){
     *          đk đúng
     *      }else{
     *          đk sai
     *      }
     */
    $number = 21; 
    if($number % 2 == 0){
        echo "số chẵn". "<br>";
    }else{
        echo "số lẻ". "<br>";
    }

    echo $kq = ($number % 2 == 0)? "số chẵn": "số lẻ";
?>