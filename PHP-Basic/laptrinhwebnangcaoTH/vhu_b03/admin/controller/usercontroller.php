<?php
include '../utils/vhvalidate.php';
class usercontroler{
    function __construct($action)
    {
        $valid = new validate();
        switch ($action) {
            case "login":
                $username = $_POST["username"];
                $password = $_POST["password"];
                if ($this -> isUser($username, $password)) {
                    header("Location: ../view/userlist.php");
                }
                break;
            case "create":
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $gioitinh = $_POST["gioitinh"];
                $sothich = isset($_POST["sothich"]) ? $_POST["sothich"] : "";
                $role = $_POST["role"];
                if ($valid -> checkUserName($username) && $valid -> checkUserEmail($email) && $this->islog()) {
                    header("Location: ../view/userlist.php");
                } else {
                    header("Location: ../view/login.php");
                }
                break;
            case "edit":
                $id=$_GET["id"]; 
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
    private function isUser($uname, $pass) {
        if ($uname == "admin" && $pass == "admin") {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["is_login"] = true;
            $_SESSION["username"] = $uname;
            return true;
        }
        return false;
    }
    private function islog() {
        if (!isset($_SESSION)) {
            session_start();
            if ($_SESSION["is_login"]) {
                return true;
            } 
            return false;
        }
    }
}
$action = "";
if (isset($_GET["action"])) {
     $action = $_GET["action"];
   
} else {
    $action = $_POST["useraction"];
}
$userController = new usercontroler($action);
?>