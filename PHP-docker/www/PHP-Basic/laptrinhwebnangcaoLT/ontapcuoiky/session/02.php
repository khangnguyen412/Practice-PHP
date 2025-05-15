<?php
    include_once './fileuploads/fileUtils.php';
    $action = isset($_POST["usercontrol"])? $_POST["usercontrol"]: header("Location: ./01.php");
    $usctrl = new handlecode($action);

    class handlecode{
        function __construct($action){
            switch($action){
                case 'login':
                    if(!isset($_SESSION)){
                        session_start();
                        $user = $_POST["username"];
                        $pass = $_POST["pass"];
                        if($user == "admin" && $pass == "admin"){ 
                            $_SESSION["username"] = $user;
                            $_SESSION["pass"] = $pass;
                            $_SESSION["is_login"] = true;
                            header("Location:./03.php");
                        }else{
                            header("Location:./01.php");
                        }
                    }
                    break;
                case 'logout':
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    session_unset();
                    session_destroy();
                    header("Location: ./01.php");
                    break;
                case 'create':
                    if(!isset($_SESSION)){
                        session_start();
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        $email = $_POST["email"];
                        //lấy file 
                        $avt = $_FILES["file"]["name"];
                        $uploadfile = new fileUpload();
                        $uploadfile->uploadfile("file");

                        $servername = "localhost";
                        $dbname = "ontap";
                        $usernamedb = "root";
                        $passworddb = "";
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernamedb, $passworddb);
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "insert into ontap.laythongtin values (?, ?, ?, ?);";
                            $stmt = $conn->prepare($sql);
                            $stmt->bindParam(1, $username);
                            $stmt->bindParam(2, $password);
                            $stmt->bindParam(3, $email);
                            $stmt->bindParam(4, $avt);
                            $stmt->execute();
                            echo "Connected successfully";
                        } catch(PDOException $e) {
                            echo "Connection failed: " . $e->getMessage();
                        }
                    }
                    break;
            }
        }
    }
    
?>