<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define('PI', 3.14);
        echo "kiểm tra số chẵn lẻ: "."<br>";
        $a = 12;
        if ($a % 2 == 0 ){
            echo "<div style='color: red'> ". $a ." số chẳn </div>"."<br>";
        }else{
            echo "<div style='color: green'> ". $a ." số lẽ </div>"."<br>";
        }
    ?>
</body>
</html>