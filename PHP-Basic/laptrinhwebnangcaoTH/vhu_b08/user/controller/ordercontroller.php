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
                $sp = new SanPham($id,"", "", 1, "", "");

                if(!empty($_SESSION["cart_item"])){
                    if(array_key_exists($id, $_SESSION["cart_item"])){
                        $num = (int) $_SESSION["cart_item"][$id]->getSoLuongSP();
                        $number = $num + 1;
                        $_SESSION["cart_item"][$id]->setSoLuongSP($number);
                    }else{
                        $_SESSION["cart_item"][$id]=$sp;
                    }
                }else{
                    $_SESSION["cart_item"][$id] = $sp;
                }
                header("Location: ../controller/ordercontroller.php");
                break;
            case "order":
                session_start();
                $data['product'] = $_SESSION["cart_item"];
                // die;
                include '../view/cart.php';
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
    $action = isset($_GET["orderaction"])?  $_GET["orderaction"]: "";
}

$userController = new orderController($action);
?>