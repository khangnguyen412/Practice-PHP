<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 0;
        for($i = 0; $i <= 10; $i++){
            if($i == 3 || $i == 8)  continue; //bỏ qua và không thực hiện khi giá trị của i = 3 và 8
            echo $i.'<br>';
        }
    ?>
</body>
</html>