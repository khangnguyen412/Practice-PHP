<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /**
         * vòng lặp continue và break
         * - continue là chức năng dừng vòng lặp tại giá trị được chỉ định và tiếp tục vòng lặp với giá trị tiếp theo
         * - break là thoát khỏi vòng lặp với giá trị đc chỉ định
         * 
         * cú pháp:
         *  while(điều_kiện){
         *      continue;
         *      hoặc 
         *      break;
         *  }
         */

        $n = 0;
        for($i = 0; $i < 100; $i++){
            if($n <= 3){
                if($i % 8 == 0 && $i > 0){
                    echo $i.'<br>';
                    $n++;
                }
            } else{
                break;
                // tuy giá trị chỉ in ra 3 số nhưng lại vòng lặp phải chạy tới i<100 thì mới dừng nên ta dùng break để ngưng luôn vòng lặp
            }
        }
    ?>
</body>
</html>