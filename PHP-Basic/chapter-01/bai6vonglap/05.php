<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hiển thị hình ảnh</h1>
    <div>
        <?php
            $i = 1;
            do{
                echo '<img src="./image/a'.$i.'.jpg" alt="" srcset=""> <br>';
                $show = 0;
                if(isset($_GET["showpic"])){
                    $show = $_GET["showpic"];
                    $i++;
                }
            }while($i <= 2 && $show == 1) //khi bấm vào => show = 1 thì mới xuất hiện các ảnh còn lại
        ?>
        <a href="05.php?showpic=1">hiển thị tất cả</a> <br>
        <a href="05.php?showpic=0">thu gọn</a>
    </div>
</body>
</html>