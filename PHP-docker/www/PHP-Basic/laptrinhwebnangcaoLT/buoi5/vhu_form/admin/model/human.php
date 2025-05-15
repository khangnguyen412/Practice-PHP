<?php
    class human{
        private $ms;
        private $ten;
        private $gioitinh;
        private $namsinh;
        //phương thức khởi tạo
        public function __construct($ms, $ten, $gioitinh, $namsinh)
        {
            $this->ms = $ms;
            $this->ten = $ten;
            $this->gioitinh = $gioitinh;
            $this->namsinh = $namsinh;
        }
        public function __destruct()
        {
            $this->ms = "";
            $this->ten = "";
            $this->gioitinh = "";
            $this->namsinh = "";
        }
        //phương thức
        public function laytuoi(){
            return date("Y") - $this->namsinh;
        }
        public function getms(){
            return $this->ms;
        }
        public function setms($ms){
            $this-> msgv = $ms;
        }
        public function getten(){
            return $this->ten;
        }
        public function setten($ten){
            $this-> tengv = $ten;
        }
        public function getgt(){
            return $this->gioitinh;
        }
        public function setgt($gioitinh){
            $this-> gioitinh = $gioitinh;
        }
        public function getnamsinh(){
            return $this->namsinh;
        }
        public function setnamsinh($namsinh){
            $this-> namsinh = $namsinh;
        }
        public function xuat(){
            echo "MS: "         . $this->ms                 . "<br>";
            echo "Tên: "        . $this->ten                . "<br>";
            echo "Năm sinh: "   . $this->namsinh            . "<br>";
            echo "Giới tính: "  . $this->gioitinh           . "<br>";
            echo "Tuổi: "       . $this->laytuoi($this)     . "<br>";
        }
    }
?>
