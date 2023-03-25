<?php
    // trích xuất nội dung trong chuỗi
    $str = 'that is Khang';
    echo $str."<br>";
    $find = substr($str, 2);
    //substr($chuỗi, vị_trí) => tìm vị_trí và trích xuất nội dung trong chuỗi
    echo $find."<br>";
    $find = substr($str, 2, 5);
    //substr($chuỗi, vị_trí, đơn_vị_lấy) => tìm vị_trí và trích xuất nội dung trong chuỗi tới đơn_vị_lấy
    //nếu vị_trí là -1 thì nó sẽ quay lại đuôi của chuỗi
    echo $find;
?>