<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>giải câu đố bằng vòng lặp</H1>
    <div>
        <p>
            yêu nhau cau sáu bổ ba <br>
            ghét nhau cau sáu bổ ra làm mười <br>
            mỗi người một miếng trăm người <br>
            có mười bảy quả hỏi người ghét yêu <br>
            hỏi có bao nhiều người ghét nhau yêu nhau?? <br>
        </p>
        <h3>Đáp án</h3>
        <p>
            <?php
                // x là số người yêu nhau, y là số người ghét nhau
                // từ 3 câu đầu ta có biểu thức: 3x + 10y = 100 (nếu x=1 => y<=9 nếu y=1 => x<=30)
                // từ câu cuối t có biểu thức: x + y =17
                for($x = 1; $x <= 30; $x++){
                    for($y = 1; $y <= 9; $y++){
                        if(3*$x + 10*$y == 100 && $x + $y == 17){
                            echo "$x người yêu nhau, $y người ghét nhau <br>";
                        }
                    }
                }
            ?>
        </p>
    </div>
</body>
</html>