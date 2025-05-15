<?php
    function joinString ($str1, $str2, $join = " "){// hàm nối chuỗi
        $rs = $str1. $join. $str2;
        return $rs;
    }
    $kq = joinString("Nguyễn Mạnh", "Quốc Khang", "--");
    echo $kq;
?>