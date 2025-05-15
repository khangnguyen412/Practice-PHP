<?php
    $student = array();
    $student["001"] = array("tên" =>"Khang" ,"giới tính" =>"nam", "điểm" => array(10, 9, 8.0));
    $student["002"] = array("tên" =>"Long" ,"giới tính" =>"nam", "điểm" => array(10, 9, 8.0));
    
    // in ra và tính tổng tổng điểm cho mỗi sinh viên \
    //cách 1:
    foreach($student as $val){
        $name = $val["tên"];//phần tử được chỉ đinh cho biến 
        $gen = $val["giới tính"];
        $core = $val["điểm"];
        $sum = 0;
        foreach($core as $val1){
            $sum += $val1; 
        }
        echo "điểm cách 1: $sum". "<br>";
    }
    //cách 2:
    foreach($student as $val){
        $name = $val["tên"];//phần tử được chỉ đinh cho biến 
        $gen = $val["giới tính"];
        $core = $val["điểm"];
        $sum = 0;
        for($i = 0; $i < count($core); $i++ ){
            $sum += $core[$i]; 
        }
        echo "điểm cách 2: $sum". "<br>";
    }
    //cách 3:
    foreach($student as $val){
        $name = $val["tên"];//phần tử được chỉ đinh cho biến 
        $gen = $val["giới tính"];
        $core = $val["điểm"];
        $sum = array_sum($core);
        echo "điểm cách 3: $sum". "<br>";
    }
?>