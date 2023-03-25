<?php
include '../utils/vhvalidate.php';
include_once '../utils/fileUtils.php';
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
                $so_thich = "";
                foreach($sothich as $st){
                    $so_thich = $so_thich.",".$st;
                }
                $role = $_POST["role"];
                $avt = $_FILES["avatar"]["name"];

                $uploadfile = new fileUpload();
                $uploadfile->uploadfile("avatar");
                
                $servername = "localhost";
                $usernamedb = "root";
                $passworddb = "";
                $dbname = "thuchanhweb";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernamedb, $passworddb);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "insert into thuchanhweb.userlist values (?, ?, ?, ?, ?, ?, ?, now())";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(1, $username);
                    $stmt->bindParam(2, $password);
                    $stmt->bindParam(3, $email);
                    $stmt->bindParam(4, $gioitinh);
                    $stmt->bindParam(5, $so_thich);
                    $stmt->bindParam(6, $role);
                    $stmt->bindParam(7, $avt);
                    $stmt->execute();
                    echo "Connected successfully";
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                die;
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