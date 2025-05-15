<?php
    class user{
        private $username;
        private $password;
        private $email;
        private $gen;
        private $fav;
        private $role;
        private $avatar;

        public function __construct($user, $pass, $email, $gen, $fav, $role, $avt)
        {
            $this->username = $user;
            $this->password = $pass;
            $this->email = $email;
            $this->gen = $gen;
            $this->fav = $fav;
            $this->role = $role;
            $this->avatar = $avt;
        }
        public function __destruct()
        {
            $this->username = "";
            $this->password = "";
            $this->email = "";
            $this->gen = "";
            $this->fav = "";
            $this->role = "";
            $this->avatar = "";
        }

        public function getusername(){
            return $this->username;
        }
        public function setusername($user){
            $this-> username = $user;
        }
        public function getpass(){
            return $this->password;
        }
        public function setpass($pass){
            $this-> password = $pass;
        }
        public function getemail(){
            return $this->email;
        }
        public function setemail($email){
            $this-> email = $email;
        }
        public function getgen(){
            return $this->gen;
        }
        public function setgen($gen){
            $this-> gen = $gen;
        }
        public function getfav(){
            return $this->fav;
        }
        public function setfav($fav){
            $this-> fav = $fav;
        }
        public function getrole(){
            return $this->role;
        }
        public function setrole($role){
            $this-> role = $role;
        }
        public function getavt(){
            return $this->avatar;
        }
        public function setavt($avt){
            $this-> avatar = $avt;
        }
    }
?>