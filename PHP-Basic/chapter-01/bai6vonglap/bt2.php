<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php
        $money = "";
        if(isset($_POST["money"])) $money = $_POST["money"];
    ?>
    <h1>Giả lập rút tiền</h1>
    <p>
        <form action="#" method="post">
            Vui lòng nhập số tiền muốn rút: <br>
            <input type="text" name="money" id="" value="<?php echo number_format($money)?>">Vnđ <br> 
            <input type="submit" value="rút tiền">
        </form>
    </p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">mệnh giá</th>
            <th scope="col">số lượng</th>
            <th scope="col">thành tiền</th>
            </tr>
        </thead>
        <?php 
            define("one", 1000);
            define("two", 2000);
            define("five", 5000);
            define("one0", 10000);
            define("two0", 20000);
            define("five0", 50000);
            define("one00", 100000);
            define("two00", 200000);
            define("five00", 500000);

            $nam00 = 0;
            $hai00 = 0;
            if(is_numeric($money) && $money > 1000){
                while($money >= five00){
                    $nam00++;
                    $money = $money - five00;
                }
                while($money >= two00){
                    $hai00++;
                    $money = $money - two00;
                }
            }
        ?>
        <tbody>
            <?php
                if ($nam00 > 0){
                    echo '<th scope="row">1</th>
                    <td> '. number_format(five00) .' </td>
                    <td> '.$nam00.' </td>
                    <td> '. number_format($nam00 * five00).' </td>';
                }
                if ($hai00 > 0){
                    echo "<br>";
                    echo '<th scope="row">1</th>
                    <td> '. number_format(two00) .' </td>
                    <td> '.$hai00.' </td>
                    <td> '. number_format($hai00 * two00).' </td>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>