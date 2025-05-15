<?php
   include_once '../model/sinhvien.php';
   include_once '../model/giangvien.php';
   $svKhang = new sinhvien("181A010020", "khang", "nam", 2000);
   $svKhang->xuat();
   echo "<hr>";
   $gvNgoc = new giangvien("GV01", "Ngọc", "nam", 2000, 2017);
   $gvNgoc->xuatinfor();
   echo "<hr>";
   $gvLam = new giangvien("GV02", "Lâm", "nam", 1985, 2017);
   $gvLam->xuatinfor();
   die;

   if(isset($_GET["action"])){
      $action = $_GET["action"];
   }else{
      $action = $_POST["useraction"];
      $username = $_POST["username"];
      $pass = $_POST["pass"];
   }
   echo $username;
   var_dump($action);
   switch ($action){
      case "login":
         echo $username;
         if($username == "admin" && $pass == "admin"){
               if (!isset($_SESSION)) {
                  session_start();
               }
               $_SESSION["is_login"] = true;
               $_SESSION["username"] = $username;
               header("Location: ../view/userlist.php");
         }
         else{
            header("Location: ../view/login.php");
         }
      break;
      case "create":
         $_SESSION["is_loggin"] = true;
         $_SESSION["username"] = $username;
         $username = $_POST["username"];// lên biến name của input và xuất array có giá trị là value
         $email = $_POST["email"];//$_POST cũng giống một mãng
         $pass = $_POST["pass"];
         $favor = isset($_POST["walk"])? $_POST["walk"]: "" ;
         $favor = isset($_POST["playgame"])? $_POST["playgame"]: "" ;
         $gen = $_POST["gen"];
         $role = $_POST["role"];
         if ($username == "admin" && $pass =="admin") {
            header("Location: ../view/userlist.php");
         } else {
            header("Location: ../view/login.php");
         }
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
         echo 'hello';
         break;
   }
?>