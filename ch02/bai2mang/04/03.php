<?php
    /**
     * mãng đa chiều 
     */
    //tạo ra một mãng quản lý thông sv
    //khai báo mãng thông tin sv bao gồm: tên, giới tính, điểm
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

    //truy xuất 1 phần tử trong mãng: 
    //xuất ra tên của sinh viên ở phần tử sv002
    echo $student2["sv002"]["tên"].'<br>';                   //long
    //xuất ra điểm môn thứ 3 của sinh viên ở phần tử sv002
    echo $student2["sv002"]["điểm"][2].'<br>';               //8
    
    //chỉnh sửa phần tử trong mãng
    //thay đổi tên của sinh viên ở phần tử sv002 = duy
    $student2["sv002"]["tên"] = 'Duy';
    echo '<pre>';
    print_r($student2);
    echo '</pre>';
?>