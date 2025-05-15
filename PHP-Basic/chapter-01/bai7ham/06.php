<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <div class="border border-primary" style=" margin: 20px">
        <?php
            /**cấu trúc hàm trong php
             * - các biến cục bộ (local) là các biến chỉ đc sử dụng trong hàm
             * - các biến toàn cục (global) là các biến được gọi và sử dụng được ở bất kỳ nơi đâu
             */
            // hàm có giá trị trả về
            $a = 123; // đây là biến cục bộ
            function box($x = 'box a', $w = 200, $h = 200){ // truyền tham số mặc định, nếu hàm gọi ko có thì sẽ lấy số này làm mặc định
                $value =    '<div class="border border-primary" style="margin: 20px; width: '.$w.'px; height: '.$h.'px;">';
                $value .=         '<p class="d-flex justify-content-center">'. $x .' <span>('.$w.' x '.$h.')</span></p>';
                $value .=    '</div>';

                //cách 1
                // global $a; // muốn gọi biến toàn cục ta phải sử dụng từ khóa global
                // echo $a."<br>";

                //cách 2
                echo $GLOBALS["a"];

                return $value; // nếu ko có dòng này giá trị sẽ không được trả về
                 
            } 
            echo $a."<br>";
            $y = box();
            echo $y;
        ?>
    </div>
</body>
</html>
<?php
    echo $a;
?>
