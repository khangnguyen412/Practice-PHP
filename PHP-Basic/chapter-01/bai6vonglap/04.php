<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>chép phạt </h1>
    <ul>
       <?php
        /** vòng lặp do while
         * cú pháp:
         *  giá trị bắt đầu
         *  do{
         *      câu lệnh;
         *      bước nhảy;
         *  }while(điều_kiện_dừng) 
         * lưu ý: trong vòng lặp do while này nếu có sai điều kiện tại ban đầu đi nữa thì vòng lặp này vẫn hoạt động một lần vì do trước rồi mới xét tới đk sau
         * 
        */
        $i = 10;
        do{
            echo 'đây là vòng lặp do while <br>';
            $i++;
        }while($i <= 20)
       ?>
    </ul>
    <div>
        
    </div>
</body>
</html>