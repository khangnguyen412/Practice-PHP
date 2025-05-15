<!--cú pháp của một biến php được viết như sau:
    $tên_biến = giá_trị_của_biến -->

<?php
    $firstname = "nguyễn";
    $lastname = "khang";
    $name = "nguyễn mạnh quốc khang";

    /**xuất nội dung của biến t sử dụng câu lệnh echo
     * cú pháp:
     *      echo $tên_biến 
     */
    echo $name;

    echo"<br>";
    /**để nối 2 chuỗi lại với nhau trong php ta sử dụng dấu chấm */
    $fullname = $firstname . " " . $lastname;
    echo $fullname;
?>