<?php

include '../utils/vhvalidate.php';
include_once '../utils/FileUtils.php';
include_once '../utils/MySQLUtils.php';

class UserController {

    public function __construct($action) {
        $valid = new VhuValidate();
        switch ($action) {
            case "login":
                $username = $_POST["username"];
                $password = $_POST["password"];
                if ($this->isUser($username, $password)) {
                    header("Location: ../view/userlist.php");
                }
                break;
            case "create":

                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $gioitinh = $_POST["gioitinh"];
                $sothich = isset($_POST["sothich"]) ? $_POST["sothich"] : "";
                $so_thich = "";
                foreach ($sothich as $st) {
                    $so_thich = $so_thich . "," . $st;
                }
                $role = $_POST["role"];
                $avatar = $_FILES["avatar"]["name"];
                $uploadFile = new FileUtils();
                $uploadFile->uploadFile("avatar");

                $sql = "INSERT INTO user(username, email, password, sex, prefer, avatar, role) values(:username, :email, :password, :sex, :prefer, :avatar, :role)";

                $arr_param = array("username" => $username, "email" => $email, "password" => $password, "sex" => $gioitinh, "prefer" => $so_thich, "avatar" => $avatar, "role" => $role);

                $dbCon = new MySQLUtils();
                $dbCon->connect();
                $dbCon->insertData($sql, $arr_param);
                $dbCon->disconnect();

                if ($valid->checkUserName($username) && $valid->checkUserEmail($email) && $this->isLogin()) {
                    header("Location: ../view/userlist.php");
                } else {
                    header("Location: ../view/login.php");
                }
                break;
            case "edit":
                $id = $_GET["id"];
                header("Location: ../view/userupdate.php");
                break;
            case "logout":
                if (!isset($_SESSION)) {
                    session_start();
                }
                session_unset();
                session_destroy();
                header("Location: ../view/login.php");
                break;
            default:
                echo "Hello";
                break;
        }
    }

    private function insertUser($sql, $arr_param) {
        
    }

    private function isUser($uname, $pass) {
        $username = "";
        $password = "";
        $arrUsers = array();
        $sql = "SELECT username,password FROM user where username = :username";
        $arr_param = array("username" => $uname);
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $arrUsers = $dbCon->getData($sql, $arr_param);
        $dbCon->disconnect();
        if (count($arrUsers) > 0) {
            $username = $arrUsers[0]["username"];
            $password = $arrUsers[0]["password"];

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

    private function isLogin() {
        if (!isset($_SESSION)) {
            session_start();
            if ($_SESSION["is_login"]) {
                return true;
            }
        }
        return false;
    }

}

$action = "";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = $_POST["useraction"];
}
$userController = new UserController($action);
?>