<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // khác nhau của '' và ""
        $a = "biến a";
        $b = 'biến b';
        echo "đây là một biến a: $a"."<br>"; // "" sẽ nhận được và in ra giá trị của biến 
        echo 'đây là một biến b: $b'; // '' không nhận đc và chỉ in ra tên biến
    ?>
</body>
</html>