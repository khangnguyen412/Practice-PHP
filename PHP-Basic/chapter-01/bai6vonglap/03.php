<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>vẽ tam giác</h1>
    <ul>
        <li><a href="03.php?type=1">tam giác vuông</a></li>
        <li><a href="03.php?type=2">tam giác ngược</a></li>
        <li><a href="03.php?type=3">tam giác cân</a></li> 
    </ul>
    <div>
        <?php
            /**cú pháp của vòng lặp while:
             *      giá trị bắt đầu
             *      while(điều_kiện_dừng){
             *          câu lệnh;
             *          bước nhảy;
             *      }
             */
            $kq = "";
            if(isset($_GET["type"])){
                $type = $_GET["type"];
                switch($type){
                    case 1: 
                        /**
                                *       i = 1
                                **      i = 2
                                ***     i = 3
                                ****    i = 4
                         */
                        $i = 1;
                        while($i <= 6){
                            $kq = str_repeat("*", $i); 
                            // str_repeat(kỹ_tự_hoặc_chuỗi, số_lần_lặp_chuỗi) lặp lại các ký tự trong chuỗi
                            echo $kq."<br>";
                            $i++;
                        }
                        break;
                    case 2:
                        $i = 6;
                        while($i >= 1){
                            $kq = str_repeat("*", $i); 
                            // str_repeat(kỹ_tự_hoặc_chuỗi, số_lần_lặp_chuỗi) lặp lại các ký tự trong chuỗi
                            echo $kq."<br>";
                            $i--;
                        }
                        break;
                    case 3:
                        $i = 1;
                        $n = 6;
                        while($i <= $n){
                            /**
                             *  n = 4
                                   *       i = 1, space = 3, * = 1
                                  ***      i = 2, space = 2, * = 3 (space = n - i, * = i*2 - 1)
                                 *****     i = 3, space = 1, * = 5
                                *******    i = 4, space = 0, * = 7
                            */
                            $space = str_repeat("&nbsp;&nbsp;", $n - $i) ;
                            $char =  str_repeat("*", $i*2 -1);
                            $kq = $space. $char; 
                            // str_repeat(kỹ_tự_hoặc_chuỗi, số_lần_lặp_chuỗi) lặp lại các ký tự trong chuỗi
                            echo $kq."<br>";
                            $i++;
                        }
                        break;
                }
            }
        ?>
    </div>
</body>
</html>