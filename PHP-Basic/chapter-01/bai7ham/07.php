<?php
    /** tham chiếu và tham trị
     *  - truyền biến theo tham trị. Sau khi kết thúc giá trị của biến sẽ trở lại ban đầu và không thay đổi 
     * 
     */
    function pow2($x, $y){// => kiểu truyền tham trị 
        $rs = 0;
        // thực hiện rs = x.x + y.y
        $x = $x * $x;
        $y = $y * $y;
        $rs = $x + $y;
        return $rs;
    }
    $n = 2;
    $m = 4;
    $a = pow2($n, $m); // a = 20
    echo $a. '<br>';
    echo 'n: '. $n . '<br>';
    echo 'm: '. $m . '<br>';
?>