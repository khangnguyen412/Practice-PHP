<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <div class="border border-primary" style=" margin: 20px">
        <?php
            /**cấu trúc hàm trong php
             * cú pháp: 
             *      function tên_hàm (danh_sách_tham_số){
             *          câu_lệnh;
             *      }
             * 
             * cách gọi hàm: tên_hàm (tham_chiếu)
             */
            // hàm có giá trị trả về là true false
            function check($a){
                echo $a. '  là ';
                if($a % 2 == 0){
                    return true;
                }else return false;
            } 
            $rs = check(18);
            if($rs == true){
                echo "số chẵn";
            }else echo "số lẽ";
        ?>
    </div>
</body>
</html>