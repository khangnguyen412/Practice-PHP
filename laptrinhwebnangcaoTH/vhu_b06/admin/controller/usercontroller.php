<?php

include '../utils/vhvalidate.php';
include_once '../utils/FileUtils.php';
include_once '../utils/MySQLUtils.php';
include_once '../model/User.php';

class UserController {

    public function __construct($action) {
        $valid = new VhuValidate();
        switch ($action) {
            case "login":
                $username = $_POST["username"];
                $password = $_POST["password"];
                $user = new User("", "", "", "", "", "", "");
                if ($user->isUser($username, $password)) {
                    header("Location: ../controller/usercontroller.php");
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
                $user = new User("", "", "", "", "", "", "");
                $user->insertUser($sql, $arr_param);

                if ($valid->checkUserName($username) && $valid->checkUserEmail($email) && $this->isLogin()) {
                    header("Location: ../controller/usercontroller.php");
                } else {
                    header("Location: ../view/login.php");
                }
                break;
            case "edit":
                $id = $_GET["id"];
                $sql = "SELECT id,username,email FROM users where id = :id";
                $arr_param = array("id" => $id);
                $user = new User("", "", "", "", "", "", "");
                $userInfo = $user->getUser($sql, $arr_param);

                include("../view/userupdate.php");
                break;

            case "update":
                
                $id = $_POST["id"];
                $email = $_POST['email'];
                $sql = "UPDATE users SET email=:email where id = :id";
                $arr_param = array("id" => $id, "email" => $email);
                $user = new User("", "", "", "", "", "", "");
               
                $userInfo = $user->updateUser($sql, $arr_param);

                header("Location: ../controller/usercontroller.php");
                break;

            case "delete":
                $id = $_GET["id"];

                $sql = "DELETE FROM user WHERE username = :username";
                $arr_param = array("username" => $id);
                $user = new User("", "", "", "", "", "", "");
                $user->deleteUser($sql, $arr_param);
                header("Location: ../controller/usercontroller.php");
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
                $sql = "SELECT * FROM users";
                $user = new User("", "", "", "", "", "", "");
                $arrUser = $user->getAllUser($sql);
                include '../view/userlist.php';
                break;
        }
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

if (isset($_POST["useraction"])) {
    $action = $_POST["useraction"];
} else {
    $action = $_GET["action"];
}

$userController = new UserController($action);
?>