<?php
    //sử dụng kiểu chuổi
    $str = 'đây là "Nguyễn Mạnh Quốc Khang"'; //đây là biến kiểu chuỗi
    //để giải quyết trường hợp trong trong chuỗi có đấu nháy đơn hoặc đôi ta chỉ cần chỉnh dấu nháy bên ngoài
    //ví dụ '...."...."'
    echo $str. "<br>";
    
    $str2 = 'đây là "Nguyễn" \'Mạnh\' Quốc Khang';
    //để giải quyết trường hợp trong trong chuỗi có cả đấu nháy đơn và đôi ta chỉ cần cho thêm dấu \ vào trước các dấu nháy
    //ví dụ "....\"....\""
    echo $str2. "<br>";

    $str3 = 'đây là "Nguyễn" \'Mạnh\' Quốc Khang \\';
    //để giải quyết trường hợp trong trong chuỗi có ký tự \ ta chỉ cần cho thêm dấu \ vào trước ký tự đó
    //ví dụ "....\\...."
    echo $str3. "<br>";
?>