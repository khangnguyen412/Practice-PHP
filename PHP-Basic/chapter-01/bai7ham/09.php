<?php
    /**
     * tính tổng các số trong 1 dãy số nguyên 
     * ví dụ: 123 = 6 
     */

    function sum($n){
        /**
         * 123 -> %10 = 3 lưu vào biến sum -> sum = 3 -> n = 12
         * 12  -> %10 = 2 lưu vào biến sum -> sum = 2 -> n = 1
         * 1   -> %10 = 1 lưu vào biến sum -> sum = 1 -> n = 0
         * ngưng ko lấy nữa 
         */
        $tong = 0;
        while($n != 0){
            $a = $n % 10; 
            $tong += $a; 
            $n = ($n - $a)/10; 
        }
        return $tong;
    }
    $x = sum(191);
    echo $x;
?>