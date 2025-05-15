<?php
    include_once '../model/giangvien.php';
    class giangvien extends human{
        private $namday;
        //phương thức khởi tạo
        public function __construct($msgv, $tengv, $gioitinh, $namsinh, $namday)
        {
            parent :: __construct($msgv, $tengv, $gioitinh, $namsinh);
            $this->namday = $namday;
        }
        public function __destruct()
        {
            parent :: __destruct();
            $this->namday = "";
        }
        //phương thức
        public function thamnien(){
            return date("Y") - $this->namday;
        }
        public function xuatinfor(){
            echo 'thông tin giảng viên:'.'<br>';
            parent::xuat();
            echo 'kinh nghiệm giảng viên:'. $this -> thamnien(). '<br>';
        }
    }
?>
