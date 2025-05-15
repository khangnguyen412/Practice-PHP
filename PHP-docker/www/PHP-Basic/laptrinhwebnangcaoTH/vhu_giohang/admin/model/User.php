<?php

class User {
    //put your code here
    private $username;
    private $email;
    private $password;
    private $sex;
    private $prefer;
    private $role;
    private $avatar;

    public function __construct($uname, $email, $pass, $sex, $prefer, $avatar, $role) {
        $this->username = $uname;
        $this->email = $email;
        $this->password = $pass;
        $this->sex = $sex;
        $this->prefer = $prefer;
        $this->avatar = $avatar;
        $this->role = $role;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getPrefer() {
        return $this->prefer;
    }

    public function getRole() {
        return $this->role;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function setPrefer($prefer) {
        $this->prefer = $prefer;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function insertUser($arr_param) {
        $sql = "INSERT INTO users (username,email,passwords,sex,prefer,avt,roles) values(:username, :email, :passwords, :sex, :prefer, :avt, :roles)";
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->insertData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function deleteUser($arr_param) {
        $sql = "DELETE FROM users WHERE username = :username";
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->deleteData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function getAllUser() {
        $sql = "SELECT * FROM users";
        $arrUser = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $arrUser = $dbCon->getAllData($sql);
        $dbCon->disconnect();
        return $arrUser;
    }

    public function updateUser($arr_param) {
        $sql = "UPDATE users SET email=:email where id = :id";
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->updateData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function getUser($arr = array()) {
        $sql = "SELECT id,username,email FROM users where id = :id";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }
    
    
    private function getUserByUserName($sql, $arr = array()) {
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }

    public function isUser($uname, $pass) {
        $username = "";
        $password = "";
        $arrUsers = array();
        $sql = "SELECT username, passwords FROM users where username = :username";
        $arr_param = array("username" => $uname);

        $arrUsers = $this->getUserByUserName($sql, $arr_param);

        if (count($arrUsers) > 0) {
            $username = $arrUsers[0]["username"];
            $password = $arrUsers[0]["passwords"];

            if ($uname == $uname && $pass == $password) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION["is_login"] = true;
                $_SESSION["username"] = $uname;
                return true;
            }
        }
        return false;
    }

}
