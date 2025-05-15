<!-- cấu trúc điều kiện switch
    switch(giá_trị){
        case đk1: câu_lệnh_1; break;
        case đk2: câu_lệnh_2; break;
        case đk3: câu_lệnh_3; break;
        case đk4: câu_lệnh_4; break;
        default: câu_lệnh_5; break;
    }
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đoán cung hoàng đạo</title>
</head>
<body>
    <?php
        $ngaysinh = "";
        $thangsinh = "";
        $name = "chưa có kết quả";
        $time = "chưa có kết quả";
        $show = true;
        if(isset($_POST["ngaysinh"]) && isset($_POST["ngaysinh"])){
            $ngaysinh = $_POST["ngaysinh"];
            $thangsinh = $_POST["thangsinh"];
            if(is_numeric($ngaysinh) && is_numeric($thangsinh)){
                switch($thangsinh){
                    case 1: 
                        if($ngaysinh <= 19){ $name = "Ma Kết"; $time = "22 tháng 12 - 19 tháng 1"; }
                        //nếu bé hơn 19 mà nằm trong tháng 1 của case switch thì đó là ma kết 
                        if($ngaysinh >= 20){ $name = "Bảo Bình"; $time = "20 tháng 1 - 18 tháng 2"; }
                        //nếu lớn hơn 20 mà nằm trong tháng 1 của case switch thì đó là bảo bình
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;} // nếu vượt quá số ngày trong tháng cũng sẽ sai theo
                        break;
                    case 2: 
                        if($ngaysinh <= 18){ $name = "Bảo Bình"; $time = "20 tháng 1 - 18 tháng 2"; }
                        if($ngaysinh >= 19){ $name = "Song Ngư"; $time = "19 tháng 2 - 20 tháng 3"; }
                        if($ngaysinh<1 || $ngaysinh>29){$show = false;}
                        break;
                    case 3: 
                        if($ngaysinh <= 20){ $name = "Song Ngư"; $time = "19 tháng 2 - 20 tháng 3"; }
                        if($ngaysinh >= 21){ $name = "Bạch Dương"; $time = "21 tháng 3 - 19 tháng 4	"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 4: 
                        if($ngaysinh <= 19){ $name = "Bạch Dương"; $time = "21 tháng 3 - 19 tháng 4	"; }
                        if($ngaysinh >= 20){ $name = "Kim Ngưu"; $time = "20 tháng 4 - 20 tháng 5"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 5: 
                        if($ngaysinh <= 20){ $name = "Kim Ngưu"; $time = "20 tháng 4 - 20 tháng 5"; }
                        if($ngaysinh >= 21){ $name = "Song Tử"; $time = "21 tháng 5 - 20 tháng 6"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 6: 
                        if($ngaysinh <= 20){ $name = "Song Tử"; $time = "21 tháng 5 - 20 tháng 6"; }
                        if($ngaysinh >= 21){ $name = "Cự Giải"; $time = "21 tháng 6 - 22 tháng 7"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 7: 
                        if($ngaysinh <= 22){ $name = "Cự Giải"; $time = "21 tháng 6 - 22 tháng 7"; }
                        if($ngaysinh >= 23){ $name = "Sư Tử"; $time = "23 tháng 7 - 22 tháng 8	"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 8: 
                        if($ngaysinh <= 22){ $name = "Sư Tử"; $time = "23 tháng 7 - 22 tháng 8	"; }
                        if($ngaysinh >= 23){ $name = "Xử Nữ"; $time = "23 tháng 8 - 22 tháng 9	"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 9: 
                        if($ngaysinh <= 22){ $name = "Xử Nữ"; $time = "23 tháng 8 - 22 tháng 9	"; }
                        if($ngaysinh >= 23){ $name = "Thiên Bình"; $time = "23 tháng 9 - 23 tháng 10"; }
                        break;
                    case 10: 
                        if($ngaysinh <= 23){ $name = "Thiên Bình"; $time = "23 tháng 9 - 23 tháng 10"; }
                        if($ngaysinh >= 24){ $name = "Thiên Yết"; $time = "24 tháng 10 - 22 tháng 11"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 11: 
                        if($ngaysinh <= 22){ $name = "Thiên Yết"; $time = "24 tháng 10 - 22 tháng 11"; }
                        if($ngaysinh >= 23){ $name = "Nhân Mã"; $time = "23 tháng 11 - 21 tháng 12	"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    case 12: 
                        if($ngaysinh <= 21){ $name = "Nhân Mã"; $time = "23 tháng 11 - 21 tháng 12	"; }
                        if($ngaysinh >= 22){ $name = "Ma Kết"; $time = "22 tháng 12 - 19 tháng 1"; }
                        if($ngaysinh<1 || $ngaysinh>31){$show = false;}
                        break;
                    default: 
                        $show = false;
                        break;
                }
            }else{
                $show = false;
            }
        }
    ?>
    <h1>bạn thuộc cung hoàng đạo nào?</h1>
    <form action="#" method="post" name="form">
        <input type="text" name="ngaysinh" value="<?php echo $ngaysinh;?>">
        <input type="text" name="thangsinh" value="<?php echo $thangsinh;?>">
        <input type="submit" value="xem chòm sao " name="xem kq">
        <P>
            <!-- có 2 cách xuất kết quả
            cách 1: chòng php vào div  -->
            
            <h1> kết quả: <?php if($show == true) {echo $name;} else {echo "nhập sai số liệu";} ?> - (<?php if($show == true) {echo $time;} else {echo "nhập sai số liệu";} ?>)</h1>

            <!-- cách 2: bao php cho html -->
            <?php
                // $kq = '<h1> kết quả: '. $name .' - ('. $time .')</h1>'
            ?>
        </P>
    </form>
</body>
</html>