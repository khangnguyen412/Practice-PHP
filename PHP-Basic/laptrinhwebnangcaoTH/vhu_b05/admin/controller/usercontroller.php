<?php
include '../utils/vhvalidate.php';
include_once '../utils/fileUtils.php';
include_once '../utils/mysql.php';
include_once '../model/user.php';
class usercontroler{
    function __construct($action)
    {
        $valid = new validate();
        switch ($action) {
            case "login":
                $username = $_POST["username"];
                $password = $_POST["password"];
                if ($this -> isUser($username, $password)) {
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
                foreach($sothich as $st){
                    $so_thich = $so_thich.",".$st;
                }
                $role = $_POST["role"];
                $avt = $_FILES["avatar"]["name"];

                $uploadfile = new fileUpload();
                $uploadfile->uploadfile("avatar");
                
                // $servername = "localhost";
                // $usernamedb = "root";
                // $passworddb = "";
                // $dbname = "thuchanhweb";
                // try {
                //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernamedb, $passworddb);
                //     // set the PDO error mode to exception
                //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "insert into doancuoikybai3.users(username, email, passwords, sex, prefer, avt, roles) values (:username, :email, :pass, :sex, :prefer, :avt, :role)";
                $arrayparam = array("username"=> $username, "pass"=> $password, "email"=> $email, "sex"=> $gioitinh, "prefer"=> $so_thich, "role"=> $role, "avt"=> $avt);
                // $this-> insertUser($sql, $arrayparam);
                $dbcon = new condb();
                $dbcon -> condata();
                $dbcon -> insertData($sql, $arrayparam);
                $dbcon -> disconnet();
                //     echo "Connected successfully";
                // } catch(PDOException $e) {
                //     echo "Connection failed: " . $e->getMessage();
                // }
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
            case "delete":
                $id=$_GET["id"]; 
                $sql = "delete from doancuoikybai3.users where username = :id";
                $arrayparam = array("id" => $id);
                $this -> deleteUser($sql, $arrayparam);
                header("Location: ../view/userupdate.php");
                break;
            case "logout":
                if (!isset($_SESSION)) {
                    session_start();
                }
                session_unset();
                session_destroy();
                header("Location: ../controller/usercontroller.php");
                break;
            default:
                $sql = "select * from users";
                $arruser = $this->getAll($sql);
                include '../view/userlist.php';
                break;
        }
    }
    private function insertUser($sql, $arr_param) {
        // try {
        //     $stmt=$this->conn->prepare($sql);
        //     $stmt->excute($arr_param);
        //     echo "Connected successfully";
        // } catch(PDOException $e) {
        //     echo "Connection failed: " . $e->getMessage();
        // }
    }
    private function getAll($sql) {
        $arrUser = array();
        $dbcon = new condb();
        $dbcon->condata();
        $arrUser = $dbcon->getalldata($sql);
        $dbcon->disconnet();
        return $arrUser;
    }
    private function deleteUser($sql, $arr_param) {
        try {
            $dbcon = new condb();
            $dbcon -> condata();
            $dbcon -> insertData($sql, $arr_param);
            $dbcon -> disconnet();
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    private function isUser($uname, $pass) {
        $username = "";
        $password = "";
        $sql = "select username, passwords from doancuoikybai3.users where username = :uname";
        $arrayparam = array("uname"=> $uname);
        $dbcon = new condb();
        $dbcon -> condata();
        $arruser = $dbcon->getdata($sql, $arrayparam);
        $dbcon -> disconnet();
        if(count($arruser) > 0){
            $username = $arruser[0]["username"];
            $password = $arruser[0]["passwords"];
            if ($uname == $username && $pass == $password) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION["is_login"] = true;
                $_SESSION["username"] = $uname;
                return true;
            }
            return false;
        }       
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