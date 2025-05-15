<?php
    //rút gọn chuỗi
    $str = "Cách viết một đoạn văn như thế nào? Làm thế nào để viết một đoạn văn đúng về hình thức, hấp dẫn về nội dung. Để giải đáp cho những câu hỏi này, các em hãy cùng tham khảo bài Hướng dẫn cách viết một đoạn văn cho học sinh tiểu học, THCS dưới đây nhé.";
    echo $str. "<br>";

    function ngatdoan($str, $maxchar = 50, $thaythe = "..."){
        $rs = $str;
        if(strlen($str) > $maxchar){
            $rs = substr($str, 0, $maxchar). $thaythe; 
        }
        return $rs;
    }

    $str1 = ngatdoan($str, 60, "....");
    echo $str1. "<br>";
?>