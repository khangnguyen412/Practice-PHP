<?php

function isUser($uname, $pass) {
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

include '../utils/vhvalidate.php';
$action = "";

if (isset($_GET["action"])) {
     $action = $_GET["action"];
   
} else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $action = $_POST["useraction"];
}

switch ($action) {
    case "login":
        if (isUser($username, $password)) {// sử dụng hàm phía trên để xác nhận admin 
            header("Location: ../view/userlist.php");
        }
        break;
    case "create":
        $email = $_POST["email"];
        $gioitinh = $_POST["gioitinh"];
        $sothich = isset($_POST["sothich"]) ? $_POST["sothich"] : "";
        $role = $_POST["role"];
        if (checkUserName($username) && checkUserEmail($email && isUser($username, $password))) {
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
?>