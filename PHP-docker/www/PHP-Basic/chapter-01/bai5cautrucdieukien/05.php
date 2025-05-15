<!-- cấu trúc điều kiện switch
    switch(giá_trị){
        case đk1: câu_lệnh_1; break;
        case đk2: câu_lệnh_2; break;
        case đk3: câu_lệnh_3; break;
        case đk4: câu_lệnh_4; break;
        default: câu_lệnh_5; break;
    }
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "nhập số thứ nhất";
        $b = "nhập số thứ hai";
        $pheptoan = "nhập phép toán";
        $kq = "mời nhập số";
        $x = true;
        if( isset($_POST["so1"]) && isset($_POST["so2"]) && isset($_POST["pheptinh"])){
            $a = $_POST["so1"];
            $b = $_POST["so2"];
            $pheptoan = $_POST["pheptinh"];
        }
        if(is_numeric($a)  && is_numeric($b)){
            switch($pheptoan){
                case "+": $kq = $a + $b; break;
                case "-": $kq = $a - $b; break;
                case "*": $kq = $a * $b; break;
                case "/": $kq = $a / $b; break;
                default: $kq = $a % $b; break;
            }
        }else{
            $kq = "không thực hiện được";
            $x = false;
        } 
    ?>
    <h1>mô phỏng máy tính điện tử</h1>
    <form action="#" method="post" name="form">
        <input type="text" name="so1" id="soa" value="<?php echo $a;?>">
        <input type="text" name="so2" id="sob" value="<?php echo $b;?>">
        <input type="text" name="pheptinh" id="pheptoan" value="<?php echo $pheptoan;?>">
        <input type="submit" value="xem kết quả " name="xem kq">
        <P>
            <h1>
                <?php 
                    if($x == true){
                        echo "kết quả: ". $kq;
                    }else{
                        echo $kq;
                    }
                ?>
            </h1>
        </P>
    </form>
</body>
</html>