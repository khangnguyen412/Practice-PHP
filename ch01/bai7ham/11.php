<?php
    /**
     * để kéo file khác vào ta có thể sử dụng 2 cách sau: 
     * cách 1:
     *      require "tên_file.php";
     * cách 2:
     *      include "tên_file.php";
     * 
     * require_once và include_once là hàm cấm trùng lập đường dẫn
     */
    //cách 1:
    require '10.php'; 
    //require '19.php'; -> sai đường dẫn ko có file 19
    // nếu gặp lỗi (như sai đường dẫn như trên) require sẽ dừng tất cả code phía dưới lại
    require '10.php';
    require_once '10.php';// -> chỉ in 2 cái trên, tương tự cho include_once '10.php'
    
    //cách 2:
    include "10.php";
    // nếu gặp lỗi (như sai đường dẫn như trên) include sẽ tiếp tục code thực hiện code phía dưới lại
    
    echo 'file parent'.'<br>';
?>