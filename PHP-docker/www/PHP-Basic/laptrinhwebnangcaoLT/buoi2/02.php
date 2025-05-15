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
        echo "tính diện tích hình tròn"."<br>";
        $r = 3;
        $S = $r*$r*PI;
        $c = 2 * PI *$r;
        echo "diện tích hình tròn: " . $S ."<br>";
        echo "chu vi hình tròn: " . $c ."<br>";
    ?>
</body>
</html>