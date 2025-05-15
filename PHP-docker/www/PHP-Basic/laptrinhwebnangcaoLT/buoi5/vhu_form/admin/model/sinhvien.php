
<?php
    include_once '../model/human.php';
    class sinhvien extends human{
        public function __construct($mssv, $ten, $gioitinh, $namsinh)
        {
            parent::__construct($mssv, $ten, $gioitinh, $namsinh);
        }
        public function __destruct()
        {
            parent::__destruct();
        }
        public function xuat(){
            echo 'thông tin sinh viên:'.'<br>';
            parent::xuat();
        }
    }
?>
