<?php
    /** tham chiếu và tham trị
     *  - truyền biến theo tham chiếu. Sau khi kết thúc giá trị của biến cũng sẽ thay đổi tùy theo xử lý của hàm
     */
    function pow2(&$x, &$y){// => kiểu truyền tham chiếu
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