<?php

include '../utils/vhvalidate.php';
include_once '../utils/FileUtils.php';
include_once '../utils/MySQLUtils.php';
include_once '../model/SanPham.php';

class orderController {
    public function __construct($action) {
        $valid = new VhuValidate();
        switch ($action) {
            case "add":
                session_start();
                $id=$_GET["cart"];
                $sp = new SanPham($id,"", "", 0, "", "");
                $_SESSION["cart"][$id] = $sp;
                var_dump($_SESSION);
                die;
                break;
            default:
                
                $user = new SanPham("", "", 0, 0, "", "");
                $arr = $user->getAllUser();
                include '../view/shop.php';
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

if (isset($_POST["orderaction"])) {
    $action = $_POST["orderaction"];
} else {
    $action = $_GET["orderaction"];
}

$userController = new orderController($action);
?>