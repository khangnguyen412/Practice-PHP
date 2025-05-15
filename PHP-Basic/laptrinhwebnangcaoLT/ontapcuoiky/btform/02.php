<?php
    $pt = (isset($_POST["ptrinh"]))?$_POST["ptrinh"]: 'hãy chọn một phép tính' ;
    switch ($pt){
    case 'ptb1':
        $so1 = isset($_POST["so1"]) ? $_POST["so1"]: "";
        $so2 = isset($_POST["so2"]) ? $_POST["so2"]: "";
        if($so1 == "" || $so2 == ""){
            echo "chưa nhập đủ thông tin để tính toán";
        }else{
            if($so1 == 0){
                if($so2 == 0){
                    echo "phương trình vô số nghiệm". "<br>";
                }else{
                    echo "phương trình vô nghiệm". "<br>";
                }
            }else{
                $kq = -$so1/$so2;
                echo $so1. ".". $kq. " + ". $so2. " = ". "0". "<br>";
            }
        }
        break;
    case 'ptb2':
        $so1 = isset($_POST["so1"]) ? $_POST["so1"]: "";
        $so2 = isset($_POST["so2"]) ? $_POST["so2"]: "";
        $so3 = isset($_POST["so3"]) ? $_POST["so3"]: "";
        if($so1 == "" || $so2 == "" || $so3 == ""){
            echo "chưa nhập đủ thông tin để tính toán";
        }else{
            $delta = $so2*$so2 - 4*$so1*$so3;
            if($delta<0){
                echo "phương trình vô nghiệm". "<br>";
            }
            else if($delta==0){
                $x= -$so2 /(2*$so1);
                echo "phương trình có nghiệm kép: $x". "<br>";
            }
            else{
                $delta = sqrt($delta);
                $x1 = (-$so2 + $delta) / (2*$so1);
                $x2 = (-$so2 - $delta) / (2*$so1);
                echo "phương trình 2 nghiệm riêng: ". "<br>";
                echo "nghiệm a: $x1". "<br>";
                echo "nghiệm b: $x2". "<br>";
            }
        }
        break;
    case 'NULL': 
        $so1 = isset($_POST["so1"]) ? $_POST["so1"]: "";
        $so2 = isset($_POST["so2"]) ? $_POST["so2"]: "";
        $pheptinh = isset($_POST["pheptinh"]) ?  $_POST["pheptinh"]: "";
        switch ($pheptinh){
        case 'cong':
            if($so1 == "" || $so2 == ""){
                echo "chưa nhập đủ thông tin để tính toán";
            }else{
                $kq = $so1 + $so2;
                echo $so1. " + ". $so2. " = ". $kq. "<br>";
            }
            break;
        case 'tru':
            if($so1 == "" || $so2 == ""){
                echo "chưa nhập đủ thông tin để tính toán";
            }else{
                $kq = $so1 + $so2;$kq = $so1 - $so2;
                echo $so1. " - ". $so2. " = ". $kq. "<br>";
            }
            break;
        case 'nhan':
            if($so1 == "" || $so2 == ""){
                echo "chưa nhập đủ thông tin để tính toán";
            }else{
                $kq = $so1 * $so2;
                echo $so1. " x ". $so2. " = ". $kq. "<br>";
            }
            break;
        case 'chia':
            if($so1 == "" || $so2 == ""){
                echo "chưa nhập đủ thông tin để tính toán";
            }else{
                $kq = $so1 / $so2;
                echo $so1. " : ". $so2. " = ". $kq. "<br>";
            }
            break;
        case 'laydu':
            if($so1 == "" || $so2 == ""){
                echo "chưa nhập đủ thông tin để tính toán";
            }else{
                $kq = $so1 / $so2;
                echo $so1. " % ". $so2. " = ". $kq. "<br>";
            }
            break;
        default: 
            $kq = 'bạn chưa chọn phép tính';
        }    
    }    
    
?>