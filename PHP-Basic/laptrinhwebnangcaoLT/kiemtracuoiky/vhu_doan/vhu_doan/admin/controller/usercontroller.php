<?php
include '../utils/vhvalidate.php';
include_once '../utils/fileUtils.php';

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
                $role = $_POST["role"];
                $so_thich = "";
                foreach($sothich as $st){
                    $so_thich = $so_thich.",".$st;
                }
                $avt = $_FILES["avatar"]["name"];

                $uploadfile = new fileUpload();
                $uploadfile->uploadfile("avatar");
                
                $servername = "localhost";
                $usernamedb = "root";
                $passworddb = "";
                $dbname = "doancuoikybai3";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernamedb, $passworddb);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "insert into doancuoikybai3.users values (null,?, ?, ?, ?, ?, ?, ?, now())";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(1, $username);
                    $stmt->bindParam(2, $email);
                    $stmt->bindParam(3, $password);
                    $stmt->bindParam(4, $gioitinh);
                    $stmt->bindParam(5, $so_thich);
                    $stmt->bindParam(6, $avt);
                    $stmt->bindParam(7, $role);
                    $stmt->execute();
                    echo "Connected successfully";
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                if ($valid->checkUserName($username) && $valid->checkUserEmail($email) && $this->isLogin()) {
                    header("Location: ../view/userlist.php");
                } else {
                    header("Location: ../view/login.php");
                }
                break;
            case "delete":
                $username = $_POST["username"];
                $servername = "localhost";
                $usernamedb = "root";
                $passworddb = "";
                $dbname = "doancuoikybai3";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernamedb, $passworddb);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "delete from doancuoikybai3.users where vh181A010020_username = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(1, $username);
                    $stmt->execute();
                    echo "Connected successfully";
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                if ($this->isLogin()) {
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