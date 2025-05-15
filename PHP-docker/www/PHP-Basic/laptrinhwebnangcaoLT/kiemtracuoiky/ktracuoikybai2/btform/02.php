<?php
    $pt = (isset($_POST["ptrinh"]))?$_POST["ptrinh"]: 'hãy chọn một phép tính' ;
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
?>