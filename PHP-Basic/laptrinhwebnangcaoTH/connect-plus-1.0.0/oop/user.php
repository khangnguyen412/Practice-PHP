<?php
    class user{
        private $uname;
        private $email;
        private $pass;
        private $sex;
        private $avatar;
        private $add;

        public function __construct($username, $email, $passwords, $sex, $avt, $address){
            $this->uname = $username;
            $this->email = $email;
            $this->pass = $passwords;
            $this->sex = $sex;
            $this->avatar = $avt;
            $this->add = $address;
        } 

        public function getuname(){
            return $this->uname;
        }
        public function setuname($username){
            $this->uname = $username;
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
            $sql ="insert into users (username, email, pass, sex, avt, address) values (:username, :email, :passwords, :sex, :avt, :address)";
            $condb = new connectdb();
            $condb->connect();
            $condb->insertData($sql, $param);
            $condb->disconnect();
        }

        public function updateDB($param){
            $sql ="update users set username = :username, email = :email, pass = :passwords, sex = :sex, avt = :avt, address = :address where id_nameAtribute = :id";
            $condb = new connectdb();
            $condb->connect();
            $condb->updateData($sql, $param);
            $condb->disconnect();
        }

        public function deleteDB($param){
            $sql ="DELETE FROM users WHERE id_nameAtribute = :id";
            $condb = new connectdb();
            $condb->connect();
            $condb->deleteData($sql, $param);
            $condb->disconnect();
        }

        public function getAllDB(){
            $sql ="select * from users";
            $userlist = array();
            $condb = new connectdb();
            $condb->connect();
            $userlist = $condb->getAllData($sql);
            $condb->disconnect();
            return $userlist;
        }

        public function getUserDB($param){
            $sql ="select * from users where id_nameAtribute = :id;";
            $userlist = array();
            $condb = new connectdb();
            $condb->connect();
            $userlist = $condb->getData($sql, $param);
            $condb->disconnect();
            return $userlist;
        }

        public function getUsernameDB($param){
            $sql ="select * from users where username like :username";
            $userlist = array();
            $condb = new connectdb();
            $condb->connect();
            $userlist = $condb->getData($sql, $param);
            $condb->disconnect();
            return $userlist;
        }

        private function getUserByUserName($sql, $arr = array()) {
            $user = array();
            $dbCon = new connectdb();
            $dbCon->connect();
            $user = $dbCon->getData($sql, $arr);
            $dbCon->disconnect();
            return $user;
        }
    
        public function isUser($uname, $pass) {
            $username = "";
            $password = "";
            $avt = "";
            $arrUsers = array();
            $sql = "SELECT username, pass, avt FROM users where username = :username";
            $arr_param = array("username" => $uname);
    
            $arrUsers = $this->getUserByUserName($sql, $arr_param);
    
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