<?php
    class checkout{
        private $checkname;
        private $number; 
        private $email;
        private $method;
        private $flat;
        private $street;
        private $city;
        private $state;
        private $country;
        private $pin_code;
        private $total_product;
        private $total_price;

        public function __construct($name, $number, $email, $method, $flat, $street, $city, $state, $country, $pin_code, $total_product, $total_price){
            $this->checkname = $name;
            $this->number = $number;
            $this->email = $email;
            $this->method = $method;
            $this->flat = $flat;
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->country = $country;
            $this->pin_code = $pin_code;
            $this->total_product = $total_product;
            $this->total_price = $total_price;
        } 

        public function getcname(){
            return $this->checkname;
        }
        public function setcname($name){
            $this->checkname = $name;
        }
        public function getnumber(){
            return $this->number;
        }
        public function setnumber($number){
            $this->number = $number;
        }

        public function getemail(){
            return $this->email;
        }
        public function setemail($email){
            $this->email = $email;
        }

        public function getmethod(){
            return $this->method;
        }
        public function setmethod($method){
            $this->method = $method;
        }

        public function getflat(){
            return $this->flat;
        }
        public function setflat($flat){
            $this->flat = $flat;
        }

        public function getstreet(){
            return $this->street;
        }
        public function setstreet($street){
            $this->street = $street;
        }
        public function getcity(){
            return $this->city;
        }
        public function setcity($city){
            $this->city = $city;
        }
        public function getstate(){
            return $this->state;
        }
        public function setstate($state){
            $this->state = $state;
        }
        public function getcountry(){
            return $this->country;
        }
        public function setcountry($country){
            $this->country = $country;
        }
        public function getpin_code(){
            return $this->pin_code;
        }
        public function setpin_code($pin_code){
            $this->pin_code = $pin_code;
        }
        public function gettotal_product(){
            return $this->total_product;
        }
        public function settotal_product($total_product){
            $this->total_product = $total_product;
        }
        public function gettotal_price(){
            return $this->total_price;
        }
        public function settotal_price($total_price){
            $this->total_price = $total_price;
        }

        public function insertDB($param){
            $sql ="insert into Order (name,number, email, method, flat, street,city, state, country, pin_code, total_product, total_price) values (:name,:number, :email, :method, :flat, :street, :city, :state, :country, :pin_code, :total_product, :total_price)";
            $condb = new connectdb();
            $condb->connect();
            $condb->insertData($sql, $param);
            $condb->disconnect();
        }

        public function updateDB($param){
            $sql ="update Order set name= :name, number =:number, email = :email, method = :method, flat = :flat, street = :street, city = :city, state = :state country = :country, pin_code = :pin_code, total_product = :total_product, total_price = :total_price where id = :id";
            $condb = new connectdb();
            $condb->connect();
            $condb->updateData($sql, $param);
            $condb->disconnect();
        }

        public function deleteDB($param){
            $sql ="DELETE FROM checkout WHERE id = :id";
            $condb = new connectdb();
            $condb->connect();
            $condb->deleteData($sql, $param);
            $condb->disconnect();
        }

        public function getAllDB(){
            $sql ="select * from checkout";
            $checklist = array();
            $condb = new connectdb();
            $condb->connect();
            $checklist = $condb->getAllData($sql);
            $condb->disconnect();
            return $checklist;
        }

        public function getOrderDB($param){
            $sql ="select * from checkout where id = :id;";
            $checklist = array();
            $condb = new connectdb();
            $condb->connect();
            $checklist = $condb->getData($sql, $param);
            $condb->disconnect();
            return $checklist;
        }

        public function getOrdernameDB($param){
            $sql ="select * from checkout where name like :name";
            $checklist = array();
            $condb = new connectdb();
            $condb->connect();
            $checklist = $condb->getData($sql, $param);
            $condb->disconnect();
            return $checklist;
        }

        private function getOrderByname($sql, $arr = array()) {
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
        public function isOrder($cname, $method) {
            $username = "";
            $method = "";
            $street = "";
            $arrUsers = array();
            $sql = "SELECT name, method, street FROM checkout where name = :name";
            $arr_param = array("name" => $cname);
    
            $arrUsers = $this->getOrderByname($sql, $arr_param);
    
            if (count($arrUsers) > 0) {
                $username = $arrUsers[0]["username"];
                $method = $arrUsers[0]["method"];
                $street = $arrUsers[0]["street"];
    
                if ($cname == $cname && $method == $method) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION["is_login"] = true;
                    $_SESSION["username"] = $cname;
                    $_SESSION["street"] = $street;
                    return true;
                }
            }
            return false;
        }
    
    }
?>