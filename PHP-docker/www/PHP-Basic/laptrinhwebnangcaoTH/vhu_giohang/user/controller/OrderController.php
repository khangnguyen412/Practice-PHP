<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderController
 *
 * @author DELL
 */
include '../utils/vhvalidate.php';
include_once '../utils/FileUtils.php';
include_once '../utils/MySQLUtils.php';
include_once '../model/SanPham.php';

class OrderController {

    //put your code here
    public function __construct($action) {
        switch ($action) {
            case "add":
                session_start();
                $prodID = $_GET["cart"];
                $sp = new SanPham($prodID, "", 0, 1, "", "");

                if (!empty($_SESSION["cart_item"])) {
                    if (array_key_exists($prodID, $_SESSION["cart_item"])) {
                        $num = (int) $_SESSION["cart_item"][$prodID]->getSoLuongSP();
                        $number = $num + 1;
                        $_SESSION["cart_item"][$prodID]->setSoLuongSP($number);
                    } else {
                        $_SESSION["cart_item"][$prodID] = $sp;
                    }
                } else {
                    $_SESSION["cart_item"][$prodID] = $sp;
                }
                header("Location:../controller/ordercontroller.php");
                break;
            case "order":
                session_start();
                $data = array();
                $maSPList = "'";
                foreach (array_keys($_SESSION["cart_item"]) as $maSP) {
                    $maSPList .= $maSP . "','";
                }

                $SPham = new SanPham("", "", 0, 0, "", "");
                $arrProduct = $SPham->getAllProductByID(substr($maSPList, 0, -2));
                for($i = 0;$i<count($arrProduct);$i++){
                    $ma = $arrProduct[$i]["maSP"];
                    $data[$ma]['item'] = $arrProduct[$i];
                    $data[$ma]['sl'] = $_SESSION["cart_item"][$ma]->getSoLuongSP();
                }
               
                include '../view/cart.php';
                break;
            default:
                $SPham = new SanPham("", "", 0, 0, "", "");
                $arrSP = $SPham->getAllProduct();
                include '../view/shop.php';
                break;
        }
    }

}

$action = "";

if (isset($_POST["orderaction"])) {
    $action = $_POST["orderaction"];
} else {
    $action = isset($_GET["orderaction"]) ? $_GET["orderaction"] : "";
}

$orderController = new OrderController($action);
?>