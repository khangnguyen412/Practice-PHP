<?php
    /**
     * mãng đa chiều 
     */
    //tạo ra một mãng quản lý thông sv
    //khai báo mãng thông tin sv bao gồm: tên, giới tính, điểm
    $student = array();
    $student["001"] = array("tên" =>"Khang" ,"giới tính" =>"nam", "điểm" => array(10, 9, 8.0));
    $student["002"] = array("tên" =>"Long" ,"giới tính" =>"nam", "điểm" => array(10, 9, 8.0));
    //trong mãng dãy số sv có chứa thêm một mãng thông tin sv => mãng đa chiều

    //một cách khai báo mãng đa chiều khác 
    $student2 = array(
                        "sv001" => array(
                                            "tên" =>"Khang",
                                            "giới tính" =>"nam", 
                                            "điểm" => array(10, 9, 8.0)
                                        ),
                        "sv002" => array(
                                            "tên" =>"long",
                                            "giới tính" =>"nam", 
                                            "điểm" => array(10, 9, 8.0)
                                        ),
                    );


    echo '<pre>';
    print_r($student2);
    echo '</pre>';
?>