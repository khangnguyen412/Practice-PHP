<?php
    /**để chuyển đổi 1 kiêu dữ liệu ta làm như sau
     * cách 1: ép kiểu d.liệu
     *      (kiểu_d.liệu_muốn_đổi)$tên_biến
     * 
     * cách 2: sử dụng hàm settype()
     *      settype($tên_biến, "kiểu_d.liệu_muốn_đổi")
     */
    $bien1 = 12.4;
    echo (float)$bien1;
    echo "<br>";
    
    $bien2 = 13.14;
    echo settype($bien2, "integer");
?>