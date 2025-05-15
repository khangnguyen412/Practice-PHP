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
                }else{
                    header("Location: ../view/login.php");
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

                $arr_param = array("username" => $username, "email" => $email, "passwords" => $password, "sex" => $gioitinh, "prefer" => $so_thich, "avt" => $avatar, "roles" => $role);
                $user = new User("", "", "", "", "", "", "");
                $user->insertUser($arr_param);

                if ($valid->checkUserName($username) && $valid->checkUserEmail($email) && $this->isLogin()) {
                    header("Location: ../controller/usercontroller.php");
                } else {
                    header("Location: ../view/login.php");
                }
                break;
                
            //GET
            case "edit":
                $id = $_GET["id"];

                $arr_param = array("id" => $id);
                $user = new User("", "", "", "", "", "", "");
                $userInfo = $user->getUser($arr_param);

                include("../view/userupdate.php");
                break;
            //POST
            case "update":
                $id = $_POST["id"];
                $email = $_POST['email'];
                $arr_param = array("id" => $id, "email" => $email);
                $user = new User("", "", "", "", "", "", "");

                $userInfo = $user->updateUser($arr_param);

                header("Location: ../controller/usercontroller.php");
                break;

            case "delete":
                $id = $_GET["id"];

                $arr_param = array("username" => $id);
                $user = new User("", "", "", "", "", "", "");
                $user->deleteUser($arr_param);
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
                $user = new User("", "", "", "", "", "", "");
                $arrUser = $user->getAllUser();
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