<?php
    /**toán tử điều kiện
     * cú pháp:
     *      (điều_kiện)? "giá_trị_đúng": "giá_trị_sai" 
     */
    
    $x = "lập trình PHP";
    $result = (is_string($x))? "đây là chuỗi": "đây không phải là chuỗi";
    echo $result; 
?>