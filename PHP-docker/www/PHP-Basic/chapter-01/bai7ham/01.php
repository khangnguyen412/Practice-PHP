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
            function boxa(){
                echo    '<div class="border border-primary" style="margin: 20px; width: 300px; height: 200px;">';
                echo         '<p class="d-flex justify-content-center">BOX A <span>(300x200)</span></p>';
                echo    '</div>';
            } 
            boxa();
            boxa()
        ?>
    </div>
</body>
</html>