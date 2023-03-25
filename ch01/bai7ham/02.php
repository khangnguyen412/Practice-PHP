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
            // hàm có giá trị trả về
            function boxa(){
                $value =    '<div class="border border-primary" style="margin: 20px; width: 300px; height: 200px;">';
                $value .=         '<p class="d-flex justify-content-center">BOX A <span>(300x200)</span></p>';
                $value .=    '</div>';
                return $value; // nếu ko có dòng này giá trị sẽ không được trả về
            } 
            $rs = boxa();
            echo $rs;
        ?>
    </div>
</body>
</html>