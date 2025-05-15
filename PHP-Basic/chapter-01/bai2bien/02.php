<?php
    /**để xác định kiểu d.liệu của một biến nào đó ta làm 2 cách sau 
     * cú pháp: 
     *      var_dump($tên_biến)
     * hoặc:
     *      gettype($tên_biến)
     */
    $firstname = "nguyễn";
    $lastname = "khang";
    echo "cách 1: ";
    var_dump($lastname);
    echo "<br>";

    echo "cách 2: ";
    echo gettype($firstname);
    echo "<br>";
?>