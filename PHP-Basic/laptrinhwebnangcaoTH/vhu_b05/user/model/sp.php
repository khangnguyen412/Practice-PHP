<?php
   class sanpham{
        private $masp;
        private $tensp;
        private $giasp;
        private $motasp;
        private $soluong;
        private $hinhanh;

        public function __construct($ma, $ten, $gia, $mota, $sl, $img)
        {
            $this->masp = $ma;
            $this->tensp = $ten;
            $this->giasp = $gia;
            $this->motasp = $mota;
            $this->soluong = $sl;
            $this->hinhanh = $img;
        }
        public function __destruct()
        {
            $this->masp = "";
            $this->tensp = "";
            $this->giasp = "";
            $this->motasp = "";
            $this->soluong = "";
            $this->hinhanh = "";
        }

        public function getmasp(){
            return $this -> masp;
        }
        public function setmasp($masp){
            $this -> masp = $masp;
        }

        public function gettensp(){
            return $this -> tensp;
        }
        public function settensp($tensp){
            $this -> ten = $tensp;
        }

        public function getgiasp(){
            return $this -> giasp;
        }
        public function setgiasp($giasp){
            $this -> giasp = $giasp;
        }

        public function getmota(){
            return $this -> motasp;
        }
        public function setmota($motasp){
            $this -> motasp = $motasp;
        }

        public function getsl(){
            return $this -> soluong;
        }
        public function setsl($soluong){
            $this -> soluong = $soluong;
        }

        public function getimg(){
            return $this -> hinhanh;
        }
        public function setimg($img){
            $this -> hinhanh = $img;
        }
   } 
?> 