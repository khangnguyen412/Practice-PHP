<?php
    class admins{
        private $adname;
        private $email;
        private $pass;
        private $sex;
        private $avatar;
        private $add;

        public function __construct($adminname, $email, $passwords, $sex, $avt, $address){
            $this->adname = $adminname;
            $this->email = $email;
            $this->pass = $passwords;
            $this->sex = $sex;
            $this->avatar = $avt;
            $this->add = $address;
        } 

        public function getuname(){
            return $this->adname;
        }
        public function setuname($adminname){
            $this->adname = $adminname;
        }

        public function getemail(){
            return $this->email;
        }
        public function setemail($email){
            $this->email = $email;
        }

        public function getpass(){
            return $this->pass;
        }
        public function setpass($passwords){
            $this->pass = $passwords;
        }

        public function getsex(){
            return $this->sex;
        }
        public function setsex($sex){
            $this->sex = $sex;
        }

        public function getavt(){
            return $this->avatar;
        }
        public function setavt($avt){
            $this->avatar = $avt;
        }

        public function getaddress(){
            return $this->add;
        }
        public function setaddress($address){
            $this->add = $address;
        }

        public function insertDB($param){
            $sql ="insert into admins (adminname, email, pass, sex, avt, address) values (:username, :email, :passwords, :sex, :avt, :address)";
            $condb = new connectdb();
            $condb->connect();
            $condb->insertData($sql, $param);
            $condb->disconnect();
        }

        public function updateDB($param){
            $sql ="update admins set adminname= :username, email = :email, pass = :passwords, sex = :sex, avt = :avt, address = :address where id_nameAtribute = :id";
            $condb = new connectdb();
            $condb->connect();
            $condb->updateData($sql, $param);
            $condb->disconnect();
        }

        public function deleteDB($param){
            $sql ="DELETE FROM admins WHERE id_nameAtribute = :id";
            $condb = new connectdb();
            $condb->connect();
            $condb->deleteData($sql, $param);
            $condb->disconnect();
        }

        public function getAllDB(){
            $sql ="select * from admins";
            $userlist = array();
            $condb = new connectdb();
            $condb->connect();
            $userlist = $condb->getAllData($sql);
            $condb->disconnect();
            return $userlist;
        }

        public function getAdminDB($param){
            $sql ="select * from admins where id_nameAtribute = :id;";
            $userlist = array();
            $condb = new connectdb();
            $condb->connect();
            $userlist = $condb->getData($sql, $param);
            $condb->disconnect();
            return $userlist;
        }

        public function getAdminnameDB($param){
            $sql ="select * from users where adminname like :username";
            $userlist = array();
            $condb = new connectdb();
            $condb->connect();
            $userlist = $condb->getData($sql, $param);
            $condb->disconnect();
            return $userlist;
        }

        private function getAdminByAdminName($sql, $arr = array()) {
            $user = array();
            $dbCon = new connectdb();
            $dbCon->connect();
            $user = $dbCon->getData($sql, $arr);
            $dbCon->disconnect();
            return $user;
        }
        public function getallDB1(){
            $sql ="select * from checkout";
            $checkoutlist = array();
            $condb = new connectdb();
            $condb->connect();
            $checkoutlist = $condb->getAllData($sql);
            $condb->disconnect();
            return $checkoutlist;
        }
        public function isAdmin($uname, $pass) {
            $username = "";
            $password = "";
            $avt = "";
            $arrUsers = array();
            $sql = "SELECT adminname, pass, avt FROM admins where adminname = :username";
            $arr_param = array("username" => $uname);
    
            $arrUsers = $this->getAdminByAdminName($sql, $arr_param);
    
            if (count($arrUsers) > 0) {
                $username = $arrUsers[0]["username"];
                $password = $arrUsers[0]["pass"];
                $avt = $arrUsers[0]["avt"];
    
                if ($uname == $uname && $pass == $password) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION["is_login"] = true;
                    $_SESSION["username"] = $uname;
                    $_SESSION["avt"] = $avt;
                    return true;
                }
            }
            return false;
        }
    
    }
?>