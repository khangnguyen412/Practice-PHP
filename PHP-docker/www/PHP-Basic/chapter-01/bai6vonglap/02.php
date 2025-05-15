<!-- vòng lặp while -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>chép phạt</h1>
    <ul>
        <?php
            /**cú pháp của vòng lặp while:
             *      gián trị bắt đầu
             *      while(điều_kiện_dừng){
             *          câu lệnh;
             *          bước nhảy;
             *      }
             */
            $i = 1;
            while($i <= 10){
                echo "<li> em hứa sẽ làm bài tập đầy đủ </li>";
                $i++;
            }
        ?>
    </ul>
</body>
</html>