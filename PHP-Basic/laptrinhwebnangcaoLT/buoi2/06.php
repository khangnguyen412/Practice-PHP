<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function uoc($a){ 
            $dem = 0;
            for ($i = 1; $i <= $a; $i++){
                if($a % $i == 0){
                    $dem++;
                }
            }
            return $dem;
        }
        $x=100;
        $y = uoc($x);
        echo "sô ước đếm: ". $y;
    ?>
</body>
</html>