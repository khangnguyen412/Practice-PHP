<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $soluong = 44;
        $dongia = 10000;
        $thanhtien = '';
        if ( $soluong >= 40 ){// xét điều kiện lớn trước rồi bé dần
            $thanhtien = $soluong * $dongia * (60/100);
        }else if ( $soluong >= 30){
            $thanhtien = $soluong * $dongia * (70/100);
        }else if ( $soluong >= 20){
            $thanhtien = $soluong * $dongia * (80/100);
        }else {
            $thanhtien = $soluong * $dongia;
        }
        echo "tổng tiền sp là: " . $thanhtien ."<br>";
    ?>
</body>
</html>