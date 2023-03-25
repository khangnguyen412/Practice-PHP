<?php
    include '../lib/validate.php';
    include '../lib/fileupload.php';
    include '../lib/connectdb.php';
    include '../oop/user.php';
    include '../oop/admin.php';
    include '../oop/order.php';

    class control{
        public function __construct($action){
            $check = new validate();
            switch($action){
                case "login":
                    $username = $_POST["username"];
                    $password = $_POST["passwords"];
                    $admins = new admins("", "", "", "", "", "");
                    $user = new user("", "", "", "", "", "");
                    if ($admins->isAdmin($username, $password)) {
                        header("Location: ../controller/controller.php?action=admin");
                    }elseif($user->isUser($username, $password)){
                        header("Location: ../view/index.php");
                        // echo "trang sản phẩm". "<br>";
                    }else{
                        echo "trang sản phẩm chưa login". "<br>";
                    }
                    break;

                
                //hằng
                case "create":
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["passwords"];
                    $sex = $_POST["sex"];
                    $avatar = $_FILES["avt"]["name"];
                    $address = $_POST["address"];

                    // gọi lớp kiểm tra và uploadfile
                    $checkimg = new FileUpload();
                    $checkimg->uploadFile("avt");

                    // gọi lớp user để insert database 
                    $user = new user("", "", "", "", "", "");
                    $arr_param = array("username" => $username, "email" => $email, "passwords" => $password, "sex" => $sex, "avt" => $avatar, "address" => $address);
                    $user-> insertDB($arr_param);

                    //kiểm tra tên đn với email nhập vào có phù hợp không
                    if($check->checkUserName($username) && $check->checkUserEmail($email) && $this->isLogin()){
                        header("Location: ../controller/controller.php");
                    }else{
                        header("Location: ../view/login.php");
                    }
                    break;
                case "register":
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["passwords"];
                    $sex = $_POST["sex"];
                    $avatar = $_FILES["avt"]["name"];
                    $address = $_POST["address"];

                    // gọi lớp kiểm tra và uploadfile
                    $checkimg = new FileUpload();
                    $checkimg->uploadFile("avt");

                    // gọi lớp user để insert database 
                    $user = new user("", "", "", "", "", "");
                    $arr_param = array("username" => $username, "email" => $email, "passwords" => $password, "sex" => $sex, "avt" => $avatar, "address" => $address);
                    $user-> insertDB($arr_param);

                    //kiểm tra tên đn với email nhập vào có phù hợp không
                    if($check->checkUserName($username) && $check->checkUserEmail($email)){
                        header("Location: ../controller/controller.php");
                    }else{
                        header("Location: ../view/login.php");
                    }
                    break;
                case "edit": // chức năng lấy dữ liệu để xuất lên from chỉnh sửa
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $user = new user("", "", "", "", "", "");
                    $userinfo = $user->getUserDB($arr_param);
                    // echo '<pre>';
                    // print_r($userinfo);
                    // echo '</pre>'. "<br>";
                    // die;
                    include '../view/userupdate.php';
                    break;   
                case "update": //nút chỉnh
                    $id = $_POST["id"]; 
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["passwords"];
                    $sex = $_POST["sex"];
                    $avatar = $_FILES["avt"]["name"];
                    $address = $_POST["address"];                   
                    $arr_param = array("id" => $id, "username" => $username, "email" => $email, "passwords" => $password, "sex" => $sex, "avt" => $avatar, "address" => $address);
                    $user = new user("", "", "", "", "", "");
                    $userinfo = $user->updateDB($arr_param);
                    header("Location: ../controller/controller.php?action=user");                
                    break; 
                case "delete":
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $user = new user("", "", "", "", "", "");
                    $user->deleteDB($arr_param);
                    header("Location: ../controller/controller.php?action=user");
                    break;
                //Hằng

                
                case "find":
                    $username = "%{$_POST["username"]}%";                              
                    $arr_param = array("username" => $username);
                    $user = new user("", "", "", "", "", "");
                    $userlist = $user->getUsernameDB($arr_param);
                    include '../view/userlist.php';
                    break;
                case "createadmin":
                    $adminname = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["passwords"];
                    $sex = $_POST["sex"];
                    $avatar = $_FILES["avt"]["name"];
                    $address = $_POST["address"];

                    // gọi lớp kiểm tra và uploadfile
                    $checkimg = new FileUpload();
                    $checkimg->uploadFile("avt");

                    // gọi lớp user để insert database 
                    $admins = new admins("", "", "", "", "", "");
                    $arr_param = array("adminname" => $adminname, "email" => $email, "passwords" => $password, "sex" => $sex, "avt" => $avatar, "address" => $address);
                    $admins-> insertDB($arr_param);

                    //kiểm tra tên đn với email nhập vào có phù hợp không
                    if($check->checkUserName($adminname) && $check->checkUserEmail($email) && $this->isLogin()){
                        header("Location: ../controller/controller.php?action=admin");
                    }else{
                        header("Location: ../view/login.php");
                    }
                    break;
                case "editadmin": // chức năng lấy dữ liệu để xuất lên from chỉnh sửa
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $admins = new admins("", "", "", "", "", "");
                    $adminsinfo = $admins->getAdminDB($arr_param);
                    include '../view/adminupdate.php';
                    break;   
                case "updateadmin": //nút chỉnh
                    $id = $_POST["id"]; 
                    $adminname = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["passwords"];
                    $sex = $_POST["sex"];
                    $avatar = $_FILES["avt"]["name"];
                    $address = $_POST["address"];                   
                    $arr_param = array("id" => $id, "adminname" => $adminname, "email" => $email, "passwords" => $password, "sex" => $sex, "avt" => $avatar, "address" => $address);
                    $admins = new admins("", "", "", "", "", "");
                    $adminsinfo = $admins->updateDB($arr_param);
                    header("Location: ../controller/controller.php?action=admin");                
                    break;
                case "deleteadmin":
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $admins = new admins("", "", "", "", "", "");
                    $admins->deleteDB($arr_param);
                    header("Location: ../controller/controller.php?action=admin");
                    break; 
                case "findadmin":
                    $adminname = "%{$_POST["username"]}%";                              
                    $arr_param = array("adminname" => $adminname);
                    $admins = new admins("", "", "", "", "", "");
                    $adminlist = $admins->getAdminnameDB($arr_param);
                    include '../view/adminlist.php';
                    break;
                case "editadmin": // chức năng lấy dữ liệu để xuất lên from chỉnh sửa
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $admins = new admins("", "", "", "", "", "");
                    $adminsinfo = $admins->getAdminDB($arr_param);
                    include '../view/adminupdate.php';
                    break;   
                case "updateadmin": //nút chỉnh
                    $id = $_POST["id"]; 
                    $adminname = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["passwords"];
                    $sex = $_POST["sex"];
                    $avatar = $_FILES["avt"]["name"];
                    $address = $_POST["address"];                   
                    $arr_param = array("id" => $id, "adminname" => $adminname, "email" => $email, "passwords" => $password, "sex" => $sex, "avt" => $avatar, "address" => $address);
                    $admins = new admins("", "", "", "", "", "");
                    $adminsinfo = $admins->updateDB($arr_param);
                    header("Location: ../controller/controller.php?action=admin");                
                    break;
                case "deleteadmin":
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $admins = new admins("", "", "", "", "", "");
                    $admins->deleteDB($arr_param);
                    header("Location: ../controller/controller.php?action=admin");
                    break; 
                case "findadmin":
                    $adminname = "%{$_POST["username"]}%";                              
                    $arr_param = array("adminname" => $adminname);
                    $admins = new admins("", "", "", "", "", "");
                    $adminlist = $admins->getAdminnameDB($arr_param);
                    include '../view/adminlist.php';
                    break;
                case "deleteorder":
                    $id = $_GET["id"];                    
                    $arr_param = array("id" => $id);
                    $checkout = new checkout("", "", "", "", "", "", "", "", "", "","","");
                    $checkout->deleteDB($arr_param);
                    header("Location: ../controller/controller.php?action=order");
                    break; 
                case "finduserorder":
                    $name = "%{$_POST["name"]}%";                              
                    $arr_param = array("name" => $name);
                    $checkout = new checkout("", "", "", "", "", "", "", "", "", "","","");
                    $checklist = $checkout->getOrdernameDB($arr_param);
                    include '../view/order.php';
                    break;  
                case "logout":
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    session_unset();
                    session_destroy();
                    header("Location: ../view/login.php");
                    break;
                case "admin":
                    $admins = new admins("", "", "", "", "", "");
                    $adminlist = $admins->getAllDB();
                    include '../view/adminlist.php';
                    break;
                case "user":
                    $user = new user("", "", "", "", "", "");
                    $userlist = $user->getAllDB();
                    include '../view/userlist.php';
                    break;
                case "order":
                    $checkout = new checkout("", "", "", "", "", "", "", "", "", "","","");
                    $checklist = $checkout->getAllDB();
                    include '../view/order.php';
                    break;
                case "order1":
                    $name ="%{$_GET["username"]}%" ;
                    $arr_param = array("name" => $name);
                    $checkout = new checkout("", "", "", "", "", "", "", "", "", "","","");
                    $checklist = $checkout->getOrdernameDB($arr_param);
                    include '../view/orderindex.php';
                    break;
                default:                    
                   include '../view/index.php';

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
    }else{
        isset($_GET["action"])?  $action = $_GET["action"]: $action = "";
    }
    // echo $action. "<br>";
    $useraction = new control($action);
?>