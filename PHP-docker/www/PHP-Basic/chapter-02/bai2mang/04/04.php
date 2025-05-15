<?php
    $student2 = array(
                        "sv001" => array(
                                            "tên" =>"Khang",
                                            "giới tính" =>"nam", 
                                            "điểm" => array(10, 9, 8.0)
                                        ),
                        "sv002" => array(
                                            "tên" =>"Long",
                                            "giới tính" =>"nam", 
                                            "điểm" => array(10, 9, 8.0)
                                        ),
                    );
    echo '<pre>';
    print_r($student2);
    echo '</pre>';

    // in ra và tính tổng tổng điểm cho mỗi sinh viên 
    if(!empty($student2)){
        foreach($student2 as $key => $val){
            $name = $val["tên"];
            $gen  = $val["giới tính"];
            $score= $val["điểm"];
            
            //cách 1 để tính tổng trong mãng
            $sum = 0;
            for($i = 0; $i < count($score); $i++){
                $sum += $score[$i];
            }
            //cách 2 để tính tổng trong mãng
            $tong = array_sum($score);

            echo 'tên: '. $name. ' - '. 'giới tính: '. $gen. ' - '.'điểm: '. $tong. '<br>';
        }
    }
?>