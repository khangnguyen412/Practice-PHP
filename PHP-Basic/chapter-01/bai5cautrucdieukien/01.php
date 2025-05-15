<?php
    /**cấu trúc điều kiện if
     * cú pháp: 
     *      if(điều kiện){
     *          đk đúng
     *      }
     */
    $number = 20; 
    if($number % 2 == 0){
        echo "số chẵn". "<br>";
    };

    echo $kq = ($number % 2 == 0)? "số chẵn": "số lẻ";
?>